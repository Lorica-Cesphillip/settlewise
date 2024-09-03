import { Link, Head } from '@inertiajs/react';

export default function Welcome({ auth, laravelVersion, phpVersion }) {
    const handleImageError = () => {
        document.getElementById('screenshot-container')?.classList.add('!hidden');
        document.getElementById('docs-card')?.classList.add('!row-span-1');
        document.getElementById('docs-card-content')?.classList.add('!flex-row');
        document.getElementById('background')?.classList.add('!hidden');
    };

    return (
        <>
            <Head title="Welcome" />
            <div className="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
                <img
                    id="background"
                    src="../resources/images/background.jpg"
                />
                <div className="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                    <div className="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                        <header className="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                            <div className="flex lg:justify-center lg:col-start-2">
                                <img src = "../storage/app/public/pga-logo.jpg"></img>
                            </div>
                        </header>

                        <main className="mt-6">
                            <h3 class = "text-4xl font-bold tracking-light text-gray-900 sm:text-5xl md:text-6xl p-6 text-align: center">
                                Welcome to the Document Management System of the Albay Provincial Human Settlement Office
                            </h3>

                        </main>

                        <footer className="py-16 text-center text-sm text-black dark:text-white/70">
                            SettleWise Version alpha 1.0.0
                        </footer>
                    </div>
                </div>
            </div>
        </>
    );
}
