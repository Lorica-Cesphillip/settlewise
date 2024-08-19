import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';

export default function Dashboard({ auth }) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>}
        >
            <Head title="Dashboard | SettleWise" />

            <div className="w-[300px] h-[1080px] relative">
                <div className="w-[300px] h-[1080px] left-0 top-0 absolute bg-[#93d0f7]" />
                <div className="h-[223px] px-2 left-0 top-[320px] absolute flex-col justify-start items-start gap-3 inline-flex">
                    <div className="self-stretch pl-3 pr-4 justify-start items-center gap-2.5 inline-flex">
                        <div className="grow shrink basis-0 text-[#211c6a] text-base font-bold font-['Inter'] leading-normal">Documents</div>
                    </div>
                    <div className="self-stretch h-[188px] flex-col justify-start items-start gap-1 flex">
                        <div className="self-stretch px-4 py-3 rounded justify-start items-center gap-1 inline-flex">
                            <div className="grow shrink basis-0 h-5 justify-start items-start gap-3 flex">
                                <div className="w-5 h-5 relative" />
                                <div className="grow shrink basis-0 text-[#200e3a] text-sm font-normal font-['Inter'] leading-tight">Incoming Documents</div>
                            </div>
                            <div className="px-2 bg-[#bbe2ec] rounded-[10px] flex-col justify-center items-center gap-2 inline-flex">
                                <div className="justify-center items-center gap-0.5 inline-flex">
                                    <div className="text-center text-[#200e3a] text-xs font-medium font-['Inter'] leading-[17.40px]">5</div>
                                </div>
                            </div>
                        </div>
                        <div className="self-stretch px-4 py-3 rounded justify-start items-center gap-1 inline-flex">
                            <div className="grow shrink basis-0 h-5 justify-start items-start gap-3 flex">
                                <div className="w-5 h-5 relative" />
                                <div className="grow shrink basis-0 text-[#200e3a] text-sm font-normal font-['Inter'] leading-tight">Outgoing Documents</div>
                            </div>
                            <div className="px-2 bg-[#bbe2ec] rounded-[10px] flex-col justify-center items-center gap-2 inline-flex">
                                <div className="justify-center items-center gap-0.5 inline-flex">
                                    <div className="text-center text-[#200e3a] text-xs font-medium font-['Inter'] leading-[17.40px]">15</div>
                                </div>
                            </div>
                        </div>
                        <div className="self-stretch px-4 py-3 rounded justify-start items-center gap-1 inline-flex">
                            <div className="grow shrink basis-0 h-5 justify-start items-start gap-3 flex">
                                <div className="w-5 h-5 relative" />
                                <div className="grow shrink basis-0 text-[#200e3a] text-sm font-normal font-['Inter'] leading-tight">Confidential Documents</div>
                            </div>
                            <div className="px-2 bg-[#bbe2ec] rounded-[10px] flex-col justify-center items-center gap-2 inline-flex">
                                <div className="justify-center items-center gap-0.5 inline-flex">
                                    <div className="text-center text-[#200e3a] text-xs font-medium font-['Inter'] leading-[17.40px]">6</div>
                                </div>
                            </div>
                        </div>
                        <div className="self-stretch px-4 py-3 rounded justify-start items-center gap-1 inline-flex">
                            <div className="grow shrink basis-0 h-5 justify-start items-start gap-3 flex">
                                <div className="w-5 h-5 relative" />
                                <div className="grow shrink basis-0 text-[#200e3a] text-sm font-normal font-['Inter'] leading-tight">Archived Documents</div>
                            </div>
                            <div className="px-2 bg-[#bbe2ec] rounded-[10px] flex-col justify-center items-center gap-2 inline-flex">
                                <div className="justify-center items-center gap-0.5 inline-flex">
                                    <div className="text-center text-[#200e3a] text-xs font-medium font-['Inter'] leading-[17.40px]">25</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="h-[127px] px-2 left-0 top-[543px] absolute flex-col justify-start items-start gap-3 inline-flex">
                    <div className="self-stretch pl-3 pr-4 justify-start items-center gap-2.5 inline-flex">
                        <div className="grow shrink basis-0 text-[#211c6a] text-base font-bold font-['Inter'] leading-normal">User Management</div>
                    </div>
                    <div className="self-stretch h-[92px] flex-col justify-start items-start gap-1 flex">
                        <div className="self-stretch px-4 py-3 rounded justify-start items-center gap-1 inline-flex">
                            <div className="grow shrink basis-0 h-5 justify-start items-start gap-3 flex">
                                <div className="w-5 h-5 relative" />
                                <div className="grow shrink basis-0 text-[#200e3a] text-sm font-normal font-['Inter'] leading-tight">Your Divisions</div>
                            </div>
                            <div className="px-2 bg-[#bbe2ec] rounded-[10px] flex-col justify-center items-center gap-2 inline-flex">
                                <div className="justify-center items-center gap-0.5 inline-flex">
                                    <div className="text-center text-[#200e3a] text-xs font-medium font-['Inter'] leading-[17.40px]">3</div>
                                </div>
                            </div>
                        </div>
                        <div className="self-stretch px-4 py-3 rounded justify-start items-center gap-1 inline-flex">
                            <div className="grow shrink basis-0 h-5 justify-start items-start gap-3 flex">
                                <div className="w-5 h-5 relative" />
                                <div className="grow shrink basis-0 text-[#200e3a] text-sm font-normal font-['Inter'] leading-tight">Your Employees</div>
                            </div>
                            <div className="px-2 bg-[#bbe2ec] rounded-[10px] flex-col justify-center items-center gap-2 inline-flex">
                                <div className="justify-center items-center gap-0.5 inline-flex">
                                    <div className="text-center text-[#200e3a] text-xs font-medium font-['Inter'] leading-[17.40px]">21</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="w-[236px] h-[183px] left-[34px] top-[38px] absolute">
                    <div className="w-[236px] h-14 left-0 top-[106px] absolute text-center text-[#200e3a] text-xl font-bold font-['Inter']">Albay Provincial Human Settlement Office</div>
                    <img className="w-[100px] h-[100px] left-[66px] top-0 absolute" src="https://via.placeholder.com/100x100" />
                    <div className="w-56 h-[21px] left-[6px] top-[162px] absolute text-center text-[#200e3a] text-sm font-normal font-['Inter']">Document Management System</div>
                </div>
                <div className="w-[300px] h-[73px] left-0 top-[1007px] absolute bg-[#200e3a] flex-col justify-start items-start inline-flex">
                    <div className="self-stretch h-[72px] px-6 py-4 bg-[#211c6a] justify-start items-center gap-3 inline-flex">
                        <div className="grow shrink basis-0 h-10 justify-start items-center gap-3 flex">
                            <div className="grow shrink basis-0 h-10 justify-start items-center gap-3 flex">
                                <div className="w-10 h-10 justify-center items-center flex">
                                    <img className="w-10 h-10 rounded-[200px] border border-white" src="https://via.placeholder.com/40x40" />
                                </div>
                                <div className="grow shrink basis-0 flex-col justify-start items-start inline-flex">
                                    <div className="self-stretch text-[#f5f5dc] text-sm font-medium font-['Inter'] leading-tight">Engr. Gina Paz Sipin</div>
                                    <div className="self-stretch text-[#f5f5dc] text-sm font-normal font-['Inter'] leading-tight">Department Head</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="w-6 h-6 left-[240px] top-[1031px] absolute" />
                <div className="w-[284px] px-4 py-3 left-[8px] top-[269px] absolute bg-[#fff6e9] rounded justify-start items-center gap-1 inline-flex">
                    <div className="grow shrink basis-0 h-5 justify-start items-start gap-3 flex">
                        <div className="w-5 h-5 relative" />
                        <div className="grow shrink basis-0 text-[#200e3a] text-sm font-medium font-['Inter'] leading-tight">Dashboard</div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
