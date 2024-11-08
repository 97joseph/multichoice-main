// resources/js/components/ExampleComponent.jsx
import React from 'react';

function HomeComponent() {
    return (
        <div>
            <div className="bg-afrisol-orange rounded-md">
                <div className="relative overflow-hidden bg-gradient-to-r from-[#0f6bc0] to-[#f15a24]">
                    <div className="max-w-screen-xl h-[500px] mx-auto py-2 px-4 sm:px-6 lg:py-24 lg:px-8 ">
                        <div className="relative z-10 lg:text-left">
                            <h1 className="text-4xl font-LatoBold tracking-tight leading-10 font-extrabold text-white sm:text-3xl sm:leading-none md:text-2xl lg:text-6xl">
                                Bring us your big idea
                            </h1>
                            <p className="max-w-md text-paragraph mx-auto  text-white mt-4 md:mt-6 md:max-w-6xl">
                                We take care of the state-of-the-art technology with our creative expertise. Afrisol
                                Technologies is a premier provider of information technology solutions, offering
                                unparalleled quality and creative concepts in both design and development.
                            </p>
                        </div>
                    </div>
                    <div className="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                        <img
                            className="h-full w-full brightness-50 right-4 top-[-10px] md:absolute skew-x-[-20deg] rotate-4 object-cover"
                            src={window.heroImage} alt="Background Image"/>
                    </div>
                </div>
            </div>
            <div className="relative bg-gradient-to-r from-[#f15a24] to-[#0f6bc0] py-16">
                <div className="absolute inset-0">
                    <img src={window.heroDescriptionImage} alt="Background Image"
                         className="w-full brightness-50 h-full object-cover  opacity-50"/>
                </div>

                <div className="relative max-w-screen-xl mx-auto px-8 z-10 text-white">
                    <p className="text-paragraph mb-12">At Afrisol Technologies, we understand these challenges and
                        recognize that a well-crafted IT solution is pivotal for businesses aiming to thrive in the
                        digital era. Our commitment is to provide innovative and tailored IT services that address these
                        pain points, enabling businesses to streamline operations, enhance security, and position
                        themselves for sustainable growth.</p>
                    <p className="text-paragraph mb-12">We don't just offer solutions; we provide a partnership
                        committed to your success. Our experienced team collaborates closely with your organization,
                        understanding your unique needs and delivering innovative IT solutions that drive tangible
                        results. Let us be your trusted IT partner on the journey to digital transformation.</p>
                </div>
            </div>
            <div className="bg-white py-6 sm:py-2 lg:py-12">
                <div className="mx-auto max-w-screen-2xl px-4 md:px-8">
                    <div className="grid gap-8 md:grid-cols-2 md:gap-12">
                        <div className="flex gap-4 md:gap-6">
                            <div
                                className="flex h-14 w-14 p-2 shrink-0 items-center justify-center rounded-lg text-white bg-afrisol-orange md:h-14 md:w-14 md:rounded-xl">
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 640 512">
                                    <path
                                        d="M576 0c17.7 0 32 14.3 32 32l0 448c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-448c0-17.7 14.3-32 32-32zM448 96c17.7 0 32 14.3 32 32l0 352c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-352c0-17.7 14.3-32 32-32zM352 224l0 256c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32s32 14.3 32 32zM192 288c17.7 0 32 14.3 32 32l0 160c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-160c0-17.7 14.3-32 32-32zM96 416l0 64c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32s32 14.3 32 32z"/>
                                </svg>
                            </div>

                            <div>
                            <h3 className="mb-2 font-LatoBold">Online Visibility</h3>
                                <p className="mb-2 text-paragraph">Do you have internet presence? The absence
                                    of a web presence in the Internet age is devastating. Potential clients are
                                    searching on the Internet for exactly what you offer! This means that if you do not
                                    have a website, you need to get one.
                                </p>
                                <p className="mb-2 text-paragraph">
                                    As a premier provider of custom software development services, we specialize in
                                    transforming ideas into scalable, intuitive, and purpose-built software solutions
                                    that elevate businesses to new heights.
                                </p>
                                <a href="/online-visibility"
                                   className="text-paragraph transition duration-100 text-afrisol-blue hover:text-[#f15a24]  hover:underline">Discover
                                    More</a>
                            </div>
                        </div>
                        <div className="flex gap-4 md:gap-6">
                            <div
                                className="flex h-14 w-14 p-2 shrink-0 items-center justify-center rounded-lg text-white bg-afrisol-orange md:h-14 md:w-14 md:rounded-xl">
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 640 512">
                                    <path
                                        d="M64 96c0-35.3 28.7-64 64-64l384 0c35.3 0 64 28.7 64 64l0 256-64 0 0-256L128 96l0 256-64 0L64 96zM0 403.2C0 392.6 8.6 384 19.2 384l601.6 0c10.6 0 19.2 8.6 19.2 19.2c0 42.4-34.4 76.8-76.8 76.8L76.8 480C34.4 480 0 445.6 0 403.2zM281 209l-31 31 31 31c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-48-48c-9.4-9.4-9.4-24.6 0-33.9l48-48c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9zM393 175l48 48c9.4 9.4 9.4 24.6 0 33.9l-48 48c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l31-31-31-31c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0z"/>
                                </svg>
                            </div>

                            <div>
                                <h3 className="mb-2  font-LatoBold ">Custom Software Development</h3>
                                <p className="mb-2 text-paragraph">Common needs may be met by off-the-shelf
                                    software, but solutions created especially for your particular needs can provide
                                    true efficiency and a competitive edge. At Afrisol Technologies, we think that
                                    custom software can spur innovation and advance companies.
                                </p>
                                <a href="/software-development"
                                   className="text-paragraph transition duration-100 text-afrisol-blue hover:text-[#f15a24]  hover:underline">Discover
                                    More</a>
                            </div>
                        </div>
                        <div className="flex gap-4 md:gap-6">
                            <div
                                className="flex h-14 w-14 p-2 shrink-0 items-center justify-center rounded-lg text-white bg-afrisol-orange md:h-14 md:w-14 md:rounded-xl">
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 512 512">
                                    <path
                                        d="M352 256c0 22.2-1.2 43.6-3.3 64l-185.3 0c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64l185.3 0c2.2 20.4 3.3 41.8 3.3 64zm28.8-64l123.1 0c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64l-123.1 0c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32l-116.7 0c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0l-176.6 0c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 20.9 58.2 27 94.7zm-209 0L18.6 160C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192l123.1 0c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64L8.1 320C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6l176.6 0c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352l116.7 0zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6l116.7 0z"/>
                                </svg>
                            </div>

                            <div>
                                <h3 className="mb-2  font-LatoBold ">Custom WebApp Development</h3>
                                <p className="mb-2 text-paragraph">Instead of making your company adjust to
                                    off-the-shelf solutions, Afrisol Technologies creates custom business apps that
                                    enhance your enterprise. Our techniques for developing and integrating custom
                                    solutions take into account every facet of your company to ensure maximum
                                    efficiency.
                                </p>
                                <a href="/app-development"
                                   className="text-paragraph transition duration-100 text-afrisol-blue hover:text-[#f15a24]  hover:underline">Discover
                                    More</a>
                            </div>
                        </div>
                        <div className="flex gap-4 md:gap-6">
                            <div
                                className="flex h-14 w-14 p-2 shrink-0 items-center justify-center rounded-lg text-white bg-afrisol-orange md:h-14 md:w-14 md:rounded-xl">
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 512 512">
                                    <path
                                        d="M176 24c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40c-35.3 0-64 28.7-64 64l-40 0c-13.3 0-24 10.7-24 24s10.7 24 24 24l40 0 0 56-40 0c-13.3 0-24 10.7-24 24s10.7 24 24 24l40 0 0 56-40 0c-13.3 0-24 10.7-24 24s10.7 24 24 24l40 0c0 35.3 28.7 64 64 64l0 40c0 13.3 10.7 24 24 24s24-10.7 24-24l0-40 56 0 0 40c0 13.3 10.7 24 24 24s24-10.7 24-24l0-40 56 0 0 40c0 13.3 10.7 24 24 24s24-10.7 24-24l0-40c35.3 0 64-28.7 64-64l40 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-40 0 0-56 40 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-40 0 0-56 40 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-40 0c0-35.3-28.7-64-64-64l0-40c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40-56 0 0-40c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40-56 0 0-40zM160 128l192 0c17.7 0 32 14.3 32 32l0 192c0 17.7-14.3 32-32 32l-192 0c-17.7 0-32-14.3-32-32l0-192c0-17.7 14.3-32 32-32zm192 32l-192 0 0 192 192 0 0-192z"/>
                                </svg>
                            </div>

                            <div>
                                <h3 className="mb-2  font-LatoBold ">Comprehensive IT Consultancy Services</h3>
                                <p className="mb-2 text-paragraph">At Afrisol Technologies, we recognize that
                                    companies may find it difficult to navigate the intricate and always changing world
                                    of information technology. Our IT consulting services are intended to help
                                    businesses overcome obstacles, seize opportunities, and quicken the process of
                                    digital transformation. To meet your specific demands and promote long-term company
                                    success, we provide a full range of IT consulting services.
                                </p>
                                <a href="/consulting"
                                   className="text-paragraph transition duration-100 text-afrisol-blue hover:text-[#f15a24]  hover:underline">Discover
                                    More</a>
                            </div>
                        </div>
                        <div className="flex gap-4 md:gap-6">
                            <div
                                className="flex h-14 w-14 p-2 shrink-0 items-center justify-center rounded-lg text-white bg-afrisol-orange md:h-14 md:w-14 md:rounded-xl">
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 640 512">
                                    <path
                                        d="M0 336c0 79.5 64.5 144 144 144l368 0c70.7 0 128-57.3 128-128c0-61.9-44-113.6-102.4-125.4c4.1-10.7 6.4-22.4 6.4-34.6c0-53-43-96-96-96c-19.7 0-38.1 6-53.3 16.2C367 64.2 315.3 32 256 32C167.6 32 96 103.6 96 192c0 2.7 .1 5.4 .2 8.1C40.2 219.8 0 273.2 0 336z"/>
                                </svg>
                            </div>

                            <div>
                                <h3 className="mb-2  font-LatoBold ">Comprehensive Cloud Services</h3>
                                <p className="mb-2 text-paragraph">In a world driven by data and digital
                                    transformation, cloud computing has emerged as the backbone of modern business
                                    operations. At Afrisol Technologies we understand that embracing the cloud is not
                                    just a technological shift but a strategic decision that can propel your business
                                    forward.
                                </p>
                                <a href="/cloud-computing"
                                   className="text-paragraph transition duration-100 text-afrisol-blue hover:text-[#f15a24]  hover:underline">Discover
                                    More</a>
                            </div>
                        </div>

                        <div className="flex gap-4 md:gap-6">
                            <div
                                className="flex h-14 w-14 p-2 shrink-0 items-center justify-center rounded-lg text-white bg-afrisol-orange md:h-14 md:w-14 md:rounded-xl">
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 448 512">
                                    <path
                                        d="M144 144l0 48 160 0 0-48c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192l0-48C80 64.5 144.5 0 224 0s144 64.5 144 144l0 48 16 0c35.3 0 64 28.7 64 64l0 192c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 256c0-35.3 28.7-64 64-64l16 0z"/>
                                </svg>
                            </div>

                            <div>
                                <h3 className="mb-2  font-LatoBold ">Comprehensive Cybersecurity Solutions</h3>
                                <p className="mb-2 text-paragraph">Embrace a secure future in the digital
                                    realm with Afrisol Technologies. Partner with us to unlock robust cybersecurity
                                    solutions that are customized to your business needs, instilling trust and
                                    confidence in your stakeholders.
                                </p>
                                <a href="/security-solutions"
                                   className="text-paragraph transition duration-100 text-afrisol-blue hover:text-[#f15a24]  hover:underline">Discover
                                    More</a>
                            </div>
                        </div>
                        <div className="flex gap-4 md:gap-6">
                            <div
                                className="flex h-14 w-14 p-2 shrink-0 items-center justify-center rounded-lg text-white bg-afrisol-orange md:h-14 md:w-14 md:rounded-xl">
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 640 512">
                                    <path
                                        d="M256 64l128 0 0 64-128 0 0-64zM240 0c-26.5 0-48 21.5-48 48l0 96c0 26.5 21.5 48 48 48l48 0 0 32L32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l96 0 0 32-48 0c-26.5 0-48 21.5-48 48l0 96c0 26.5 21.5 48 48 48l160 0c26.5 0 48-21.5 48-48l0-96c0-26.5-21.5-48-48-48l-48 0 0-32 256 0 0 32-48 0c-26.5 0-48 21.5-48 48l0 96c0 26.5 21.5 48 48 48l160 0c26.5 0 48-21.5 48-48l0-96c0-26.5-21.5-48-48-48l-48 0 0-32 96 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-256 0 0-32 48 0c26.5 0 48-21.5 48-48l0-96c0-26.5-21.5-48-48-48L240 0zM96 448l0-64 128 0 0 64L96 448zm320-64l128 0 0 64-128 0 0-64z"/>
                                </svg>
                            </div>

                            <div>
                                <h3 className="mb-2  font-LatoBold ">Network Design and Optimization</h3>
                                <p className="mb-2 text-paragraph">At Afrisol Technologies, we specialize in
                                    providing comprehensive network design and optimization services, tailoring
                                    solutions to meet the unique connectivity and performance needs of modern
                                    businesses. Our seasoned network architects and optimization experts are dedicated
                                    to ensuring that your network infrastructure not only meets current requirements but
                                    is scalable and adaptable to future demands.
                                </p>
                                <a href="/design"
                                   className="text-paragraph transition duration-100 text-afrisol-blue hover:text-[#f15a24]  hover:underline">Discover
                                    More</a>
                            </div>
                        </div>
                        <div className="flex gap-4 md:gap-6">
                            <div
                                className="flex h-14 w-14 p-2 shrink-0 items-center justify-center rounded-lg text-white bg-afrisol-orange md:h-14 md:w-14 md:rounded-xl">
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 512 512">
                                    <path
                                        d="M24 32c13.3 0 24 10.7 24 24l0 352c0 13.3 10.7 24 24 24l416 0c13.3 0 24 10.7 24 24s-10.7 24-24 24L72 480c-39.8 0-72-32.2-72-72L0 56C0 42.7 10.7 32 24 32zM128 136c0-13.3 10.7-24 24-24l208 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-208 0c-13.3 0-24-10.7-24-24zm24 72l144 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-144 0c-13.3 0-24-10.7-24-24s10.7-24 24-24zm0 96l272 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-272 0c-13.3 0-24-10.7-24-24s10.7-24 24-24z"/>
                                </svg>
                            </div>

                            <div>
                                <h3 className="mb-2  font-LatoBold ">Data Analytics and Business Intelligence</h3>
                                <p className="mb-2 text-paragraph">In today's dynamic business landscape, the
                                    ability to extract actionable insights from data is a competitive advantage. As a
                                    leading provider of data analytics and business intelligence services, we empower
                                    businesses to unlock the full potential of their data, drive informed
                                    decision-making, and achieve unparalleled success in a data-driven world.
                                </p>
                                <a href="/data-analytics"
                                   className="text-paragraph transition duration-100 text-afrisol-blue hover:text-[#f15a24]  hover:underline">Discover
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div className="max-w-8xl mx-auto bg-white gap-2 p-4 shadow-md my-4">
                <div className="max-w-8xl mx-auto">
                    <h2 className=" text-3xl font-extrabold text-center">Discover Our Partners</h2>
                    <p className="text-paragraph mt-4 leading-relaxed">Our network of partners comprises industry
                        leaders, technology innovators, and organizations that share our commitment to excellence. These
                        partnerships represent our commitment to delivering excellence and staying at the forefront of
                        technological innovation. By collaborating with industry leaders and like-minded organizations,
                        we strengthen our capabilities, expand our offerings, and ultimately provide greater value to
                        our clients.</p>
                </div>
            </div>
        </div>

    )
        ;
}

export default HomeComponent;
