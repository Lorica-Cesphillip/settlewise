    <!-- Post Announcement Modal -->
    <div class="modal fade" id="postAnnouncementModal" tabindex="-1" aria-labelledby="postAnnouncementLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" style="max-width: 700px; height: 1000px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal Title -->
                <div class="post-announcement-title-container text-center">
                    <h3 class="modal-title" id="postAnnouncementLabel">POST AN ANNOUNCEMENT</h3>
                </div>

                <div class="modal-body">
                    <!-- Event Title Input -->
                    <div class="mb-3">
                        <label for="announcementTitleInput" class="form-label">What is the Announcement All About?</label>
                        <input type="text" class="form-control" id="announcementTitleInput" placeholder="Event Title">
                    </div>

                    <!-- Event Location Input -->
                    <div class="mb-3">
                        <label for="announcementLocationInput" class="form-label">Where will the event happen?</label>
                        <input type="text" class="form-control" id="announcementLocationInput" placeholder="Building, Street, City/Municipality, Province">
                    </div>

                    <!-- Attendees Selector -->
                    <div class="mb-3">
                        <label for="attendeesSelect" class="form-label">Who will attend such event?</label>
                        <select class="form-select" id="attendeesSelect">
                            <option value="">-- Select Attendees --</option>
                            <!-- Add options for attendees here -->
                        </select>
                    </div>

                    <!-- Calendar Input -->
                    <div class="mb-3">
                        <label for="eventDateTimeInput" class="form-label">When and what time will the event occur?</label>
                        <input type="datetime-local" class="form-control calendar-input" id="eventDateTimeInput" placeholder="Select Date and Time">
                    </div>
                </div>

                <!-- Modal Footer with Close and Announce Buttons -->
                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-outline" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-active" data-bs-toggle="modal" data-bs-target="#announcementConfirmation">Announce</button>
                </div>
            </div>
        </div>
    </div>
