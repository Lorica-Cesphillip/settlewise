<!-- Chat Modal -->
<x-modal name="document-conversation" :maxWidth="'3xl'" :show="false" focusable>
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <!-- Chat Header with User Info -->
            <div class="modal-header">
                <div class="chat-header">
                    <img src="https://via.placeholder.com/40x40" alt="Profile Picture" class="chat-profile-img" style="width: 40px; height: 40px; border-radius: 50%;">
                    <div class="chat-user-info">
                        <div class="chat-user-name">Juan Dela Cruz</div>
                        <div class="chat-user-division">Administrative Division</div>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

        <!-- Horizontal line separator -->
        <hr class="chat-separator">

        <!-- Chat Body -->
        <div class="modal-body chat-window" style="height: 500px; overflow-y: auto;">
            <!-- Chatmate's Message (Left Aligned) -->
            <div class="chat-message-left">
                <img src="https://via.placeholder.com/40x40" alt="Chatmate Picture" class="chat-bubble-img" style="width: 40px; height: 40px; border-radius: 50%;">
                <div class="chat-message-container">
                    <div class="chat-message-bubble">
                        <p>Hello, I have some questions about the document.</p>
                    </div>
                    <small class="chat-name-timestamp">Juan Dela Cruz • 12:01 PM</small>
                </div>
            </div>

            <!-- User's Message (Right Aligned) -->
            <div class="chat-message-right">
                <div class="chat-message-container">
                    <div class="chat-message-bubble message-own">
                        <p>Sure, what would you like to know?</p>
                    </div>
                    <small class="chat-name-timestamp">You • 12:02 PM</small>
                </div>
            </div>
        </div>


            <!-- Message Input -->
            <div class="modal-footer">
                <input type="text" class="form-control" id="messageInput" placeholder="Type a message" style="width: 100%;">
                <button type="button" class="btn btn-active" id="sendMessageBtn">
                    <i class="bi bi-send-fill"></i> Send
                </button>
            </div>
        </div>
    </div>
</x-modal>
