<!-- Post Announcement Modal -->
<x-modal name="announcement" :show="false" :maxWidth="'2xl'" focusable>
    <!-- Modal Title -->
    <h3 class="font-bold text-2xl text-center pb-5">POST AN ANNOUNCEMENT</h3>

    <form action="{{route('post_announcement')}}" method="POST">
        <div>
            <x-input-label for="what" :value="__('What is the Announcement All About?')" />
            <x-text-input id="what" type="text" name="what" class="block w-full mt-1" :value="old('what')" autofocus
                autocomplete="off" placeholder="Event Title" />
            <x-input-error :messages="$errors->get('what')" class = "mt-2" />
        </div>
        <div>
            <x-input-label for="where" :value="__('Where will be the event happen?')" />
            <x-text-input id="where" type="text" name="where" class="block w-full mt-1" :value="old('where')"
                autofocus autocomplete="off" placeholder="Event Location" />
            <x-input-error :messages="$errors->get('where')" class = "mt-2" />
        </div>
        <div>
            <x-input-label for="who" :value="__('Who will attend such event?')" />
            <x-text-input id="who" type="text" name="who" class="block w-full mt-1" :value="old('who')"
                autofocus autocomplete="off" placeholder="Attendees" />
            <x-input-error :messages="$errors->get('who')" class = "mt-2" />
        </div>
        <div>
            <x-input-label for="when" :value="__('When and what time will it happen?')" />
            <x-text-input id="when" type="datetime-local" name="when" class="block w-full mt-1"
                :value="old('when')" autofocus autocomplete="off" placeholder="Event Title" />
            <x-input-error :messages="$errors->get('when')" class = "mt-2" />
        </div>

        <div class = "inline-flex w-full justify-between mt-5">
            <x-tertiary-button x-on:click.prevent="$dispatch('close-modal', 'announcement')">
                <x-slot name="name">Close</x-slot>
                <x-slot name="icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.05086 5.63616C6.66033 5.24563 6.02717 5.24563 5.63664 5.63616C5.24612 6.02668 5.24612 6.65984 5.63664 7.05037L10.5864 12.0001L5.63664 16.9499C5.24612 17.3404 5.24612 17.9736 5.63664 18.3641C6.02717 18.7546 6.66033 18.7546 7.05086 18.3641L12.0006 13.4143L16.9504 18.3641C17.3409 18.7546 17.974 18.7546 18.3646 18.3641C18.7551 17.9736 18.7551 17.3404 18.3646 16.9499L13.4148 12.0001L18.3646 7.05037C18.7551 6.65984 18.7551 6.02668 18.3646 5.63616C17.974 5.24563 17.3409 5.24563 16.9504 5.63616L12.0006 10.5859L7.05086 5.63616Z"
                            fill="#04326B" />
                    </svg>
                </x-slot>
            </x-tertiary-button>
            <button x-on:click.prevent="$dispatch('open-modal', 'confirm-announcement')"
                class = "p-4 bg-[#0d5dba] rounded-lg flex-col justify-center items-center gap-2.5 flex text-white tracking-widest hover:bg-blue-900 focus:bg-blue-900 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                Post Announcement
            </button>
        </div>

        <!-- Announcement Alert Confirmation Modal -->
        <x-modal name="confirm-announcement" :maxWidth="'xl'" :show="false" focusable>
            <div class = "justify-items-center items-center">
                <img src="{{ URL::asset('images/Warning.png') }}"
                    alt="Are you sure that the information you entered is correct?">
                <p class = "text-2xl font-bold">Alert</p>
                <p>Are you sure that the information you entered is correct?</p>
            </div>

            <div class = "inline-flex w-full justify-between mt-5">
                <x-tertiary-button x-on:click.prevent="$dispatch('close-modal', 'confirm-announcement')">
                    <x-slot name="name">Edit</x-slot>
                    <x-slot name="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="icon / pencil">
                                <path id="icon" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M17.4846 2.93333C16.1178 1.56649 13.9017 1.56649 12.5349 2.93333L12.0084 3.45977L3.81387 11.6543C3.20188 12.2663 2.80489 13.0603 2.6825 13.9171L2.42322 15.732C2.23466 17.0519 3.36603 18.1833 4.68597 17.9947L6.50087 17.7354C7.35765 17.613 8.15163 17.216 8.76361 16.6041L16.9582 8.40952L17.4846 7.88308C18.8514 6.51624 18.8514 4.30016 17.4846 2.93333ZM16.2357 6.27287L14.1451 4.1822C14.7305 3.76823 15.5462 3.82335 16.0704 4.34754C16.5946 4.87174 16.6497 5.68739 16.2357 6.27287ZM12.7155 5.58109L14.8368 7.70241L7.3494 15.1898C7.04341 15.4958 6.64642 15.6943 6.21803 15.7555L4.40312 16.0148L4.66239 14.1999C4.72359 13.7715 4.92209 13.3745 5.22808 13.0685L12.7155 5.58109Z"
                                    fill="#667185" />
                            </g>
                        </svg>
                    </x-slot>
                </x-tertiary-button>
                <button type = "submit"
                    class = "p-4 bg-green-500 rounded-lg flex-col justify-center items-center gap-2.5 flex text-white tracking-widest hover:bg-green-900 focus:bg-green-900 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    <div class = "justify-center items-center gap-2 inline-flex">
                        <div class = "font-semibold text-white">Yes</div>
                        <div class = "relative">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M20.6866 7.227C21.0882 6.84778 21.1062 6.21488 20.727 5.81337C20.3478 5.41185 19.7149 5.39378 19.3134 5.773L8.35339 16.1245L4.68664 12.6613C4.28513 12.2821 3.65222 12.3001 3.273 12.7017C2.89378 13.1032 2.91185 13.7361 3.31336 14.1153L7.66675 18.227C8.05215 18.591 8.65463 18.591 9.04003 18.227L20.6866 7.227Z"
                                    fill="white" />
                            </svg>
                        </div>
                    </div>
                </button>
            </div>
        </x-modal>
    </form>
</x-modal>
