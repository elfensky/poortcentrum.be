console.log('lavrenov.io | loaded form.js')

const form = document.forms['myForm']
const errorList = document.getElementById('form-error-list')
const params = new URLSearchParams(window.location.search)

function generateErrorItem(content) {
    const errorItem = document.createElement('li')
    errorItem.textContent = content
    errorItem.classList.add('c-contact__form__errorlist__item')
    return errorItem
}

function isNumeric(value) {
    var regex = /^[0-9]+$/
    return regex.test(value)
}

function areInputsValid() {
    let isValid = true

    console.log('start areInputsValid()')

    errorList.innerHTML = ''

    const fname = document.forms['myForm']['fname'].value
    const email = document.forms['myForm']['email'].value
    const gemeente = document.forms['myForm']['gemeente'].value
    const postcode = document.forms['myForm']['postcode'].value
    const message = document.forms['myForm']['message'].value

    console.log(fname, email, gemeente, postcode, message)
    // Regular expression pattern for email validation
    const email_pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/

    const inputs = [
        { fname: fname },
        { email: email },
        { gemeente: gemeente },
        { postcode: postcode },
        { message: message },
    ]

    if (fname == '' || fname.length < 2) {
        const error = generateErrorItem(
            'Naam is vereist, en moet minstens 2 tekens lang zijn.',
        )
        errorList.appendChild(error)
        // alert("name must be at least 2 characters long");
        isValid = false // return false;
    }

    if (!email_pattern.test(email)) {
        const error = generateErrorItem(
            'Email is vereist, en moet een echte email zijn.',
        )
        errorList.appendChild(error)
        isValid = false
    }

    if (gemeente == '' || gemeente.length < 3) {
        const error = generateErrorItem(
            'Gemeente is vereist, en moet minstens 3 tekens lang zijn.',
        )
        errorList.appendChild(error)
        isValid = false
    }

    if (postcode == '' || postcode.length < 4) {
        if (!isNumberic(postcode)) {
            const error = generateErrorItem(
                'Postcode is vereist, en mag enkel nummers bevatten.',
            )
            errorList.appendChild(error)
            isValid = false
        } else {
            const error = generateErrorItem(
                'Postcode is vereist, en moet minstens 4 nummers lang zijn.',
            )
            errorList.appendChild(error)
        }

        isValid = false
    }

    if (message == '' || message.length < 32) {
        const error = generateErrorItem(
            'Bericht is vereist, en moet minstens 32 tekens lang zijn.',
        )
        errorList.appendChild(error)
        isValid = false
    }

    console.log('end areInputsValid()')
    //if all checks pass, return true
    if (isValid === true) {
        return true
    } else {
        return false
    }
}

form.addEventListener('submit', function (event) {
    console.log('lavrenov.io | added form event listener')

    // check if inputs are valid
    const isValid = areInputsValid()
    // debugger
    // Double check the validity of the form
    if (isValid && form.checkValidity()) {
        console.log('form is valid -> submit')
        // All fields are valid, submit the form
        // Set the action and method
        form.action = 'bevestiging.php'
        form.method = 'post'
        // Submit the form
        form.submit()
    } else {
        console.log('form is invalid -> cancel')
        // Form is invalid, display error messages
        form.reportValidity()
        // Prevent the form from submitting by default
        event.preventDefault()
    }
})

if (params.size > 0) {
    // ?name=&email=&gemeente=&postcode=&message=&submit=STUREN
    const name = params.get('name')
    const email = params.get('email')
    const gemeente = params.get('gemeente')
    const postcode = params.get('postcode')
    const message = params.get('message')

    if (name.length < 1) {
        const error = generateErrorItem(
            'Naam is vereist, en moet minstens 2 tekens lang zijn.',
        )
        errorList.appendChild(error)
    } else {
        form['name'].value = name
    }

    if (email.length < 5) {
        const error = generateErrorItem(
            'Email is vereist, en moet een echte email zijn.',
        )
        errorList.appendChild(error)
    } else {
        form['email'].value = email
    }

    if (gemeente.length < 3) {
        const error = generateErrorItem(
            'Gemeente is vereist, en moet minstens 3 tekens lang zijn.',
        )
        errorList.appendChild(error)
    } else {
        form['gemeente'].value = gemeente
    }

    if (postcode.length < 4) {
        const error = generateErrorItem(
            'Postcode is vereist, en moet minstens 4 nummers lang zijn.',
        )
        errorList.appendChild(error)
    } else {
        form['postcode'].value = postcode
    }

    if (message.length < 32) {
        const error = generateErrorItem(
            'Bericht is vereist, en moet minstens 32 tekens lang zijn.',
        )
        errorList.appendChild(error)
    } else {
        form['message'].value = message
    }
}
