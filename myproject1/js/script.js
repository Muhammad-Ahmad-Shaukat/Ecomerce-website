const slider = document.querySelectorAll(".sliderimg");
let count = 0;

slider.forEach((slide, index) => {
    slide.style.left = `${index * 100}%`;
});

const slideImage = () => {
    slider.forEach((sliderimg) => {
        sliderimg.style.transition = 'transform 1.5s ease-in-out';
        sliderimg.style.transform = `translateX(-${count * 100}%)`;
    });
};

const prevSlide = () => {
    count = (count > 0) ? count - 1 : slider.length - 1;
    slideImage();
}

const nextSlide = () => {
    count = (count < slider.length - 1) ? count + 1 : 0;
    slideImage();
}

setInterval(nextSlide, 4000);

const countries = ["Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Cabo Verde", "Cambodia", "Cameroon", "Canada", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo, Democratic Republic of the", "Congo, Republic of the", "Costa Rica", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Eswatini", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kosovo", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "North Macedonia", "Norway", "Oman", "Pakistan", "Palau", "Palestine", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Sudan", "Spain", "Sri Lanka", "Sudan", "Suriname", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Timor-Leste", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Vatican City", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"];

window.onload = function() {
    const dropdownList = document.getElementById("dropdownList");
    countries.forEach(country => {
        const div = document.createElement("div");
        div.textContent = country;
        dropdownList.appendChild(div);
        div.addEventListener("click", function() {
            document.getElementById("countryInput").value = this.textContent;
            dropdownList.style.display = "none";
        });
    });
};

function filterFunction() {
    const input = document.getElementById("countryInput");
    const filter = input.value.toUpperCase();
    const dropdownList = document.getElementById("dropdownList");
    const divs = dropdownList.getElementsByTagName("div");

    dropdownList.style.display = "block";

    for (let i = 0; i < divs.length; i++) {
        const txtValue = divs[i].textContent || divs[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            divs[i].style.display = "";
        } else {
            divs[i].style.display = "none";
        }
    }
}


    var password1 = document.getElementById("signuppassword");
    var password2 = document.getElementById("confirmpassword");

    password2.addEventListener('input', () => {
        if (password2.value.length === 0 || (password1.value === password2.value && password2.value.length > 0)) {
            document.getElementById("signuppassword").style.border = "";
            document.getElementById("confirmpassword").style.border = "";
        } else {
            document.getElementById("signuppassword").style.border = "1px solid red";
            document.getElementById("confirmpassword").style.border = "1px solid red";
        }
    });
    
    function passwordStrengthChecker(pass) {
        const hasUpperCase = /[A-Z]/;
        const hasLowerCase = /[a-z]/;
        const hasNumber = /[0-9]/;
        const hasSpecialChar = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
    
        let strength = "Weak";
        let color = "red";
        
        if (pass.length >= 8) {
            if (hasLowerCase.test(pass) && hasUpperCase.test(pass) && (hasNumber.test(pass) || hasSpecialChar.test(pass))) {
                strength = "Medium";
                color = "yellow";
            }
        }
        if (hasLowerCase.test(pass) && hasUpperCase.test(pass) && hasNumber.test(pass) && hasSpecialChar.test(pass)) {
            strength = "Strong";
            color = "green";
        }
    
        // Update DOM elements
        const passwordStrengthElement = document.getElementById("strengthtype");
        const p = document.getElementById("passwordstrength");
    
        if (pass.length > 0) {
            passwordStrengthElement.style.color = color;
            p.style.display = "block";
            passwordStrengthElement.textContent = strength;
        } else {
            p.style.display = "none";
            passwordStrengthElement.textContent = "";
        }
    }

    // Event listener for password input
    var passInput = document.getElementById("signuppassword");
    passInput.addEventListener('input', () => {
        passwordStrengthChecker(passInput.value);
    });