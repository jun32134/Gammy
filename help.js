document.addEventListener('DOMContentLoaded', function() {
    var options = {
        initial: ['hello', 'How are you'],
        hello: ['How to use gammymenu', 'How to use gammytrendrec', 'How to use gammyuserrec'],
        'How to use gammymenu': ['Explain pay to play', 'Explain free to play'],
        'How to use gammytrendrec': ['Explain most played games', 'Explain best selling games', 'Explain new releases games'],
        'How are you': ['what is your name', 'How your day', 'How the weather'],
        'what is your name': ['How are you created', 'Why are you created'],
        'How your day': ['im good', 'im having a bad day']
    };

    var optionsContainer = document.getElementById('optionsContainer');

    function renderOptions(optionList) {
        optionsContainer.innerHTML = '';
        optionList.forEach(function(option) {
            var button = document.createElement('button');
            button.textContent = option;
            button.className = 'optionButton';
            button.addEventListener('click', function() {
                addMessage('user', option);
                sendMessage(option);
                if (options[option]) {
                    renderOptions(options[option]);
                }
            });
            optionsContainer.appendChild(button);
        });
    }

    renderOptions(options.initial);

    function sendMessage(message) {
        fetch('help.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ message: message })
        })
        .then(response => response.json())
        .then(data => {
            if (data.reply) {
                addMessage('bot', data.reply);
            } else {
                addMessage('bot', 'Sorry, I did not understand your request.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            addMessage('bot', 'There was an error processing your request.');
        });
    }

    document.getElementById('clearChatBtn').addEventListener('click', function() {
        document.getElementById('messages').innerHTML = '';
        renderOptions(options.initial); 
    });

    function addMessage(sender, message) {
        var messages = document.getElementById('messages');
        var messageElem = document.createElement('div');
        messageElem.className = 'message ' + sender;
        messageElem.textContent = message;
        messages.appendChild(messageElem);
        messages.scrollTop = messages.scrollHeight;
    }
});