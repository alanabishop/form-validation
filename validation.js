

function contactFormValidation() {
    // DOM elements

    const nameInput = contactForm.querySelector(".js-name");
    const emailInput = contactForm.querySelector(".js-email");
    const messageInput = contactForm.querySelector(".js-message");
    const subjectInput = contactForm.querySelector(".js-subject");
    const privacyCheckbox = contactForm.querySelector(".js-privacy-checkbox");
    const errorResponses = contactForm.querySelector(".js-error-responses");
    const submitButton = contactForm.querySelector(".js-submit-button");
    let submitted = 0;
    
    //validator functions
    // returns null if true, else returns a string with the error.
    function valueLengthGreaterThanZero(node) {
        const input = node.value.replace(/\s/g, '');
        return input.length > 0 ? null : `Please enter your ${node.name}.`;
    }
    
    function isValidEmail(emailNode) {
        const re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        return re.test(emailNode.value) ? null : `Please enter a valid email.`;
    }
    
    function valueLengthLessThan100(node) {
        return node.value.length < 100 ? null : `${node.name} is too long.`;
    }
    
    function isChecked(checkbox) {
        return checkbox.checked ? null : "Please agree to our privacy policy.";
    }
    
    // add elements and what validators it needs
    const validationMappings = [
        {
            element: nameInput,
            validators: [valueLengthGreaterThanZero, valueLengthLessThan100]
        },
        {
            element: emailInput,
            validators: [
                isValidEmail,
                valueLengthLessThan100
            ]
        },
        { element: subjectInput, validators: [valueLengthGreaterThanZero] },
        { element: messageInput, validators: [valueLengthGreaterThanZero] },
        { element: privacyCheckbox, validators: [isChecked] }
    ];
    
    //adds the error highlight on change
    function checkElementsOnChange(node, validators) {
        node.addEventListener("change", function () {
            // if a string is returned, it adds the error highlight to the element
            const errors = validationMappings.flatMap((mapping) => {
                return mapping.validators
                    .map((validator) => validator(mapping.element))
                    .filter((error) => error !== null);
            });
            if (errors.length >= 0 && submitted > 0) {
                errorResponses.innerHTML = errors.join('<br/>');
            }
        });
    }
    
    //calls the check elements on change fuction on the elements - checks the elements against it's validator(s)
    validationMappings.forEach((mapping) =>
        checkElementsOnChange(mapping.element, mapping.validators)
    );
    
    //validation function checks if there are any errors - if yes it adds them to aa single array 
    function validateContactForm() {
        const errors = validationMappings.flatMap((mapping) => {
            return mapping.validators
                .map((validator) => validator(mapping.element))
                .filter((error) => error !== null);
        });
        if (errors.length > 0) {
            errorResponses.innerHTML = errors.join('<br/>');
            //console.log(errors.slice());
        }
        return errors;
    }
    // calls validation function on submit
    submitButton.addEventListener("click", function (e) {
        const errors = validateContactForm();
        submitted++;
        if(errors.length > 0) {
            e.preventDefault();
        }
    });
    
}

