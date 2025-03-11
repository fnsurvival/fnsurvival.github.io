const chatBox = document.getElementById("chat-box");
const messageForm = document.getElementById("message-box");
const messageInput = document.getElementById("message-input");

// Add a listener for the form submit
messageForm.addEventListener("submit", (e) => {
    e.preventDefault(); // Prevent page reload

    const message = messageInput.value;
    if (message.trim() !== "") {
        // Add the user's message to the chat box
        addMessageToChat(message, "assests/myAvatar.jpg");

        // Clear the input field
        messageInput.value = "";
    }
});

// Function to add a message to the chat box ___ FOR USER
function addMessageToChat(messageText, avatar, isUser = true) {
    // Create the container div
    const container = document.createElement("div");
    container.classList.add(isUser ? "container-right" : "container-left");

    // Create the message paragraph
    const message = document.createElement("p");
    message.textContent = messageText;

    // Create the avatar image
    const img = document.createElement("img");
    img.src = avatar;
    img.alt = "Avatar";
    img.classList.add(isUser ? "right" : "left");

    // Append elements to the container
    if (isUser == true) {
        container.appendChild(message);
        container.appendChild(img);
    } else {
        container.appendChild(img);
        container.appendChild(message);
    }

    // Append the container to the chat box
    chatBox.appendChild(container);

    // Auto-scroll to the bottom
    scrollToBottom(chatBox);
}

let botMessageIndex = 0;
let botInterval; // Interval for bot messages

// Start the bot auto-chat sequence
function startBotAutoChat() {
    if (botInterval) clearInterval(botInterval); // Clear existing intervals if any

    botInterval = setInterval(() => {
        if (botMessageIndex < myMessages.length) {
            addMessageToChat(myMessages[botMessageIndex], "assests/myAvatar.jpg", false);
            botMessageIndex++;
        } else {
            clearInterval(botInterval); // Stop auto-chat once all messages are sent
        }
    }, 3000); // 3-second delay between messages
}

messageInput.addEventListener("keydown", (e) => {
    if (e.key === "Enter" && !e.shiftKey) {
        e.preventDefault(); // Prevent newline
        messageForm.dispatchEvent(new Event("submit"));
    }
});

function scrollToBottom(element) {
    element.scrollTo({
        top: element.scrollHeight,
        behavior: "smooth", // Adds a smooth scrolling animation
    });
}

const LoadingManager = {
    tasks: [],
    add(task) {
        this.tasks.push(task);
    },
    async wait() {
        await Promise.all(this.tasks);
    }
};

function loadFontAwesomeKit(url) {
    return new Promise((resolve, reject) => {
        const script = document.createElement('script');
        script.src = url;
        script.async = true;

        // Resolve when the script is loaded
        script.onload = () => {
            console.log('Font Awesome kit loaded.');
            resolve();
        };

        // Reject if there is an error
        script.onerror = () => {
            console.error('Failed to load Font Awesome kit.');
            reject(new Error('Failed to load Font Awesome kit.'));
        };

        document.head.appendChild(script);
    });
}

async function initialize() {
    try {
        // Load the Font Awesome kit
        await loadFontAwesomeKit('https://kit.fontawesome.com/a94c2c8bc2.js');
        
        // Wait a little for styles to apply
        await new Promise((resolve) => setTimeout(resolve, 500));
        
        // Hide loader and show content
        const loadingScreen = document.getElementById('loading-screen');
        const nav = document.getElementById('nav');
        const chatbox = document.getElementById('chat-box');
        const input = document.getElementById('message-box');

        // Hide the loading screen and show the content
        loadingScreen.style.display = 'none';
        nav.style.display = 'flex';
        chatbox.style.display = 'flex';
        input.style.display = 'block';
        startBotAutoChat()
    } catch (error) {
        console.error('Error during initialization:', error);
    }
}

// Initialize on page load
window.addEventListener('load', initialize);

// <!-- <script src="https://kit.fontawesome.com/a94c2c8bc2.js" crossorigin="anonymous"></script> -->
