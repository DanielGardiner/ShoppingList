
document.querySelector('form').addEventListener('submit', function (e) {

    e.preventDefault()

    let userInput = document.querySelector('#user-item').value

    fetch('/api/AddItem',
        {
            credentials: "same-origin",
            method: 'post',
            body: JSON.stringify({userInput: userInput}),
            headers: new Headers({'Content-Type': 'application/json'})
        })
        .then(response => {
            response.json()
        })
        .then(response => {
            console.log(response)
            // if (!data.success) {
            //     document.querySelector('#error-message').innerHTML = '<p>Item not added.</p>'
            // }
        })
})