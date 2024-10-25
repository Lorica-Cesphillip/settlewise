@props(['heading' => '', 'icon' => ''])

<div class="w-full self-stretch h-[73px] flex justify-between">
    <div class="h-[69px] inline-flex">
        <div class="w-[50px] h-[50px] left-0 top-[9px]  flex-col justify-start items-start inline-flex">
            {{ $icon }}
        </div>
        <div class="w-[452px] h-[69px] left-[75px] pl-3 text-black text-[32px] font-bold">
            {{ $heading }}
        </div>
    </div>
    <div class="w-full h-[69px] inline-flex">
        <div class="w-[50px] h-[50px] left-0 top-[9px] justify-start items-start inline-flex">
            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="icon / clock">
                    <g id="icon">
                        <path
                            d="M25.0001 17.7084C25.0001 16.5578 24.0673 15.6251 22.9167 15.6251C21.7662 15.6251 20.8334 16.5578 20.8334 17.7084V28.1251C20.8334 29.2757 21.7662 30.2084 22.9167 30.2084H29.1667C30.3173 30.2084 31.2501 29.2757 31.2501 28.1251C31.2501 26.9745 30.3173 26.0417 29.1667 26.0417H25.0001V17.7084Z"
                            fill="black" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M25.0001 4.16675C13.4941 4.16675 4.16675 13.4941 4.16675 25.0001C4.16675 36.506 13.4941 45.8334 25.0001 45.8334C36.506 45.8334 45.8334 36.506 45.8334 25.0001C45.8334 13.4941 36.506 4.16675 25.0001 4.16675ZM8.33341 25.0001C8.33341 15.7953 15.7953 8.33341 25.0001 8.33341C34.2048 8.33341 41.6667 15.7953 41.6667 25.0001C41.6667 34.2048 34.2048 41.6667 25.0001 41.6667C15.7953 41.6667 8.33341 34.2048 8.33341 25.0001Z"
                            fill="black" />
                    </g>
                </g>
            </svg>
        </div>
        <div x-data="clock()" x-init="init()"
            class="w-[452px] h-[69px] pl-3 pt-2 text-right text-black text-2xl font-normal">
            Today is: <u><span x-text="date"></span> <span x-text="time"></span></u>
        </div>
    </div>
</div>

<script>
    function clock() {
        return {
            time: '',
            date: '',
            init() {
                // Initialize clock with current date and time
                this.updateTime();

                // Update time every second
                setInterval(() => {
                    this.updateTime();
                }, 1000);
            },
            updateTime() {
                const current = new Date();
                this.time = current.toLocaleTimeString();
                this.date = current.toLocaleDateString('en-US', {
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                });
            }
        }
    }
</script>
