
document.querySelector('form').addEventListener('submit', function (e) {

    let userInput = document.querySelector('#user-item').value

    fetch('/api/AddItem',
        {
            credentials: "same-origin",
            method: 'post',
            body: JSON.stringify({userInput: userInput}),
            headers: new Headers({'Content-Type': 'application/json'})
        })
        .then(response => response.json())
        .then((response) => {
            if (response.success) {
                document.querySelector('#error-message').innerHTML = ''
            } else {
                document.querySelector('#error-message').innerHTML = '<p>Sorry, item not added</p>'
            }
        })
})