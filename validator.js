function Validator(options) {
  var ruleSelector = {};
  var arrayInput = [];
  function findParent(element,selector){
    while(element.parentElement){
      if(element.parentElement.matches(selector)){
        return element.parentElement;
      }
      element=element.parentElement;
    }
  }
  //Hàm thực hiện validate
  function validate(inputElement, rule) {
    var errorElement = findParent(inputElement,options.formParent).querySelector(
      options.errorSelection
    );

    var errorMassage;

    //Lấy ra rules của element đang thao tác hiện tại
    var rules = ruleSelector[rule.selector];

    //Soát các rule của selector đang xét => check
    for (let i = 0; i < rules.length; i++) {
      switch(inputElement.type){
        case 'radio':;
        case 'check':
          errorMassage = rules[i](formElement.querySelector(rule.selector + ':checked'));
        break;
        default:
          errorMassage = rules[i](inputElement.value);
          break;
      }
      if (errorMassage) break;
    }

    if (errorMassage) {
      errorElement.innerText = errorMassage;
      findParent(inputElement,options.formParent).classList.add("invalid");
    } else {
      errorElement.innerText = "";
      findParent(inputElement,options.formParent).classList.remove("invalid");
    }
    return !errorMassage;
  }

  //Lấy element của form cần validate
  var formElement = document.querySelector(options.form);
  if (formElement) {
    formElement.onsubmit = function (e) {
      e.preventDefault();
      var isFormValid = true;
      //thực hiện thủ tục validate của inputselector
      options.rules.forEach((rule) => {
        var inputElement = formElement.querySelector(rule.selector);
        var isValid = validate(inputElement, rule);
        if (!isValid) {
          isFormValid = false;
        }
      });
      if (isFormValid) {
        if (typeof options.onSubmit === "function") {
          var enableInputs = formElement.querySelectorAll("[name]");
          var formInputs = Array.from(enableInputs).reduce(function (
            values,
            input
          ) {
            switch(input.type){
              case 'radio':
              case 'checkbox':
                if(input.matches(':checked')){
                values[input.name] = input.value ;
                };
              break;
              default:
                values[input.name] = input.value ;
            }
            return values; // giong thuat toan values +=
          },
          {}); //chuyen tu nodelist sang array
          arrayInput.push(formInputs);
          options.onSubmit(arrayInput);
        }
      }
    };
    //Xử lí sau những thao tác blur, input, ...vv
    options.rules.forEach((rule) => {
      var inputElements = formElement.querySelectorAll(rule.selector);
      //select nhung thang co id la rule trong formElement

      //Lấy những danh sách rules
      if (Array.isArray(ruleSelector[rule.selector])) {
        ruleSelector[rule.selector].push(rule.test); //nếu đã có một rule tác động lên selector đó rồi
                                                     // thì vẫn thêm vào danh sách rules của selector đó
      } else {
        ruleSelector[rule.selector] = [rule.test];
      }
      Array.from(inputElements).forEach(function(inputElement){
        //Lắng nghe sự kiện blur
        
        inputElement.onblur = function () {
          validate(inputElement, rule);
        };
        //Lắng nghe sự kiện input
        inputElement.oninput = function () {
          var errorElement = findParent(inputElement,options.formParent).querySelector(
            options.errorSelection
          );
          errorElement.innerText = "";
          findParent(inputElement,options.formParent).classList.remove("invalid");
        };
      });
    });
  }
}

//Định nghĩa Rules
//Nguyên tắc của rules
//1.khi có lỗi thì trả ra message lỗi
//2.Khi hợp lệ thì không trả về gì cả
Validator.isRequired = function (selector) {
  return {
    selector: selector,
    test: function (value) {
      return value ? undefined : "Vui lòng nhập trường này";
      //.trim loại bỏ dấu cách đầu hoặc cuối chuỗi
    },
  };
};
Validator.isEmail = function (selector) {
  return {
    selector: selector,
    test: function (value) {
      var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      return regex.test(value) ? undefined : "Vui lòng nhập đúng địa chỉ email";
    },
  };
};
Validator.minLength = function (selector, min) {
  return {
    selector: selector,
    test: function (value) {
      return value.length >= min
        ? undefined
        : `Vui lòng nhập tối thiểu ${min} kí tự`;
    },
  };
};

Validator.isConfirmed = function (selector, getConfirmValue, message) {
  return {
    selector: selector,
    test: function (value) {
      return value === getConfirmValue()
        ? undefined
        : message || "Thông tin được nhập không chính xác!";
    },
  };
};
