import React from "react";

const OperatorManageQueue = () => {
    const tableData = [
        { id: 'Counter 1', description: 'A001' },
        { id: 'Counter 2', description: 'A002' },
        { id: 'Counter 3', description: 'A003' },
        { id: 'Counter 4', description: 'A004' },
        { id: 'Counter 5', description: 'A005' },
        { id: 'Counter 6', description: 'A006' },
        { id: 'Counter 7', description: 'A007' },
        { id: 'Counter 8', description: 'A008' },
        { id: 'Counter 9', description: 'A009' },
        { id: 'Counter 10', description: 'A010' },
        { id: 'Counter 11', description: 'A011' },
        { id: 'Counter 12', description: 'A012' },
        
    ];

    return (
        <div>
            <section className="py-24 relative xl:mr-0 lg:mr-5 mr-0">
                <div className="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
                    <div className="w-full justify-start items-center xl:gap-12 gap-10 grid lg:grid-cols-2 grid-cols-1">
                        
                        <div className="w-full lg:justify-start justify-center items-start flex">
                            <div
                                className="sm:w-[564px] w-full sm:h-[646px] h-full rounded-3xl sm:border border-gray-200 relative">
                                <img className="sm:mt-5 sm:ml-5 w-full h-full rounded-3xl object-cover"
                                    src={window.onlineVisibility1} alt="about Us image" style={{ background: 'none' }} />
                            </div>
                        </div>
                        
                        <div className="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                            <div className="w-full flex-col justify-center items-start gap-8 flex">
                                
                                <div className="w-full flex-col justify-center items-start gap-6 flex">
                                    <table className="min-w-full bg-white border border-gray-200">
                                        <thead>
                                            <tr>
                                                <th className="py-2 px-4 border-b">Counter</th>
                                                <th className="py-2 px-4 border-b">Token</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {tableData.map((item, index) => (
                                                <tr key={index}>
                                                    <td className="py-2 px-4 border-b">{item.id}</td>
                                                    <td className="py-2 px-4 border-b">{item.description}</td>
                                                </tr>
                                            ))}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                           
                        </div>
                        <div className="flex items-center gap-4">
                            <a href="/">
                                <img src={window.logoUrl} alt="logo" className="w-36" />
                            </a>
                            <button
                                className="sm:w-fit w-full px-7.5 py-2 bg-indigo-700 hover:bg-violet-600 text-white rounded-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] transition-all duration-700 ease-in-out justify-center items-center flex">
                                <span
                                    className="px-1.5 text-sm font-medium leading-6 group-hover:-translate-x-0.5 transition-all duration-700 ease-in-out">enjoy super sport 3 at only 90ksh!!!
                                    </span>
                                <svg className="group-hover:translate-x-0.5 transition-all duration-700 ease-in-out"
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M6.75265 4.49658L11.2528 8.99677L6.75 13.4996" stroke="#FFFFFF" strokeWidth="1.6"
                                        strokeLinecap="round" strokeLinejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    );
};

export default OperatorManageQueue;
