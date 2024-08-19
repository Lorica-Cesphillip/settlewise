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
                    src="../resources/images/308788531_430818019156189_6450719544455889731_n.jpg"
                />

                /*I do not know what happened here but, the front design gone spoof, este nawala lahat ng mga designs kapag tig-run sa Google. Hanapan ng paraan. */
                <div className="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                    <div className="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                        <main className="mt-6">
                            <div className="w-[1200px] h-[650px] bg-white">
                                <div className="w-[399px] h-[383px] relative">
                                    <div className="w-[397px] left-0 top-[52px] absolute text-center text-black text-base font-normal font-['Inter'] leading-[25px]">APHSO commits to archieve an inclusive and sustainable development of communicaties/ settlements by planning, implementing and supervising the Human Settlement (HS) program in Albay upholding ethics of governance - transparency, accountability, participation, non-dicriminition, responsiveness and poverty allevation. <br/><br/>“People’s welfare is Our primary concern.”</div>
                                    <div className="w-[398px] h-[37px] left-0 top-[293px] absolute text-center text-black text-xl font-bold font-['Inter'] leading-normal">Vision</div>
                                    <div className="w-[398px] h-[37px] left-[1px] top-[346px] absolute text-center text-black text-base font-normal font-['Inter'] leading-normal">Humanized Settlement Communication</div>
                                    <div className="w-[398px] h-[37px] left-[1px] top-0 absolute text-center text-black text-xl font-bold font-['Inter'] leading-normal">Mission</div>
                                </div>
                            </div>
                            <div className="w-[523px] h-[427px] relative">
                                <div className="w-[443px] h-[100px] left-[40px] top-0 absolute">
                                    <img className="w-[100px] h-[100px] left-0 top-0 absolute" src="../resources/images/309004884_430818022489522_6777386048914407204_n.png" />
                                    <div className="w-[317px] h-7 left-[126px] top-[26px] absolute text-black text-xl font-bold font-['Inter'] leading-[29px]">Provincial Government of Albay</div>
                                    <div className="w-[317px] h-[19px] left-[126px] top-[54px] absolute text-black text-sm font-normal font-['Inter'] leading-tight">Albay Provincial Human Settlement Office</div>
                                </div>
                                <div className="w-[523px] h-[57px] left-0 top-[130px] absolute text-center"><span style="text-black text-base font-normal font-['Inter'] leading-loose">Welcome to<br/></span><span style="text-black text-xl font-bold font-['Inter'] leading-10">SETTLEWISE: A DOCUMENT MANAGEMENT SYSTEM</span></div>
                                {status && <div className="mb-4 font-medium text-sm text-green-600">{status}</div>}

                                <form onSubmit={submit}>
                                    <div>
                                        <InputLabel htmlFor="email" value="Email" />

                                        <TextInput
                                            id="email"
                                            type="email"
                                            name="email"
                                            value={data.email}
                                            className="mt-1 block w-full"
                                            autoComplete="username"
                                            isFocused={true}
                                            onChange={(e) => setData('email', e.target.value)}
                                        />

                                        <InputError message={errors.email} className="mt-2" />
                                    </div>

                                    <div className="mt-4">
                                        <InputLabel htmlFor="password" value="Password" />

                                        <TextInput
                                            id="password"
                                            type="password"
                                            name="password"
                                            value={data.password}
                                            className="mt-1 block w-full"
                                            autoComplete="current-password"
                                            onChange={(e) => setData('password', e.target.value)}
                                        />

                                        <InputError message={errors.password} className="mt-2" />
                                    </div>

                                    <div className="block mt-4">
                                        <label className="flex items-center">
                                            <Checkbox
                                                name="remember"
                                                checked={data.remember}
                                                onChange={(e) => setData('remember', e.target.checked)}
                                            />
                                            <span className="ms-2 text-sm text-gray-600">Remember me</span>
                                        </label>
                                    </div>

                                    <div className="flex items-center justify-end mt-4">
                                        {canResetPassword && (
                                            <Link
                                                href={route('password.request')}
                                                className="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            >
                                                Forgot your password?
                                            </Link>
                                        )}

                                        <PrimaryButton className="ms-4" disabled={processing}>
                                            Log in
                                        </PrimaryButton>
                                    </div>
                                </form>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </>
    );
}
