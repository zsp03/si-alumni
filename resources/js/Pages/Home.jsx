import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head } from "@inertiajs/react";
import PrimaryButton from "@/Components/PrimaryButton";
import { Link } from "@inertiajs/react";

export default function Home(props) {
    return (
        <AuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
            header={
                <div>
                    <div className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        Halo Eka Jay, SELAMAT DATANG DI PORTAL ALUMNI UNIVERSITAS HASANUDDIN
                    </div>
                    <div className="font-medium text-base text-gray-800 dark:text-gray-200 leading-tight">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit ipsa consequatur, illum est cum, expedita repudiandae accusamus nesciunt inventore architecto sed amet magni facilis eius nulla doloribus rerum commodi quibusdam?
                    </div>
                </div>
            }
        >
            <Head title="Home" />

            <div className="py-14">
                <div className="max-w-20xl mx-auto sm:px-6 lg:px-8 flex justify-between md:justify-between gap-2.5">
                    {/* berita*/}
                    <div className="bg-white dark:bg-gray-800 overflow-hidden">
                        <div className="dark:bg-gray-800 dark:text-gray-50">
                            <div className="container grid grid-cols-12 mx-auto dark:bg-gray-900">
                                <div
                                    className="bg-no-repeat bg-cover dark:bg-gray-700 col-span-full lg:col-span-4"
                                    style={{
                                        backgroundImage:
                                            'url("https://source.unsplash.com/random/640x480")',
                                        backgroundPosition: "center center",
                                        backgroundBlendMode: "multiply",
                                        backgroundSize: "cover",
                                    }}
                                />
                                <div className="flex flex-col p-6 col-span-full row-span-full lg:col-span-8 lg:p-10">
                                    <div className="flex justify-start">
                                        <span className="px-2 py-1 text-xs rounded-full dark:bg-violet-400 dark:text-gray-900">
                                            Label
                                        </span>
                                    </div>
                                    <h1 className="text-3xl font-semibold">
                                        Lorem ipsum dolor sit.
                                    </h1>
                                    <p className="flex-1 pt-2">
                                        Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Iste, reprehenderit
                                        adipisci tempore voluptas laborum quod.
                                    </p>
                                    <a
                                        rel="noopener noreferrer"
                                        href="#"
                                        className="inline-flex items-center pt-2 pb-6 space-x-2 text-sm dark:text-violet-400"
                                    >
                                        <span>Read more</span>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                            className="w-4 h-4"
                                        >
                                            <path
                                                fillRule="evenodd"
                                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                                clipRule="evenodd"
                                            />
                                        </svg>
                                    </a>
                                    <div className="flex items-center justify-between pt-2">
                                        <div className="flex space-x-2">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20"
                                                fill="currentColor"
                                                className="w-5 h-5 dark:text-gray-400"
                                            >
                                                <path
                                                    fillRule="evenodd"
                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                                    clipRule="evenodd"
                                                />
                                            </svg>
                                            <span className="self-center text-sm">
                                                by Leroy Jenkins
                                            </span>
                                        </div>
                                        <span className="text-xs">
                                            3 min read
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {/* end-berita */}

                    {/* profil */}
                    <div className="bg-white dark:bg-gray-800 overflow-hidden">
                        {/* proifl */}
                        <div className="bg-white h-full shadow-md overflow-hidden md:max-w-md">
                            <div className="md:flex">
                                <div className="p-4">
                                    <div className="flex justify-center">
                                        <div className="relative">
                                            <img
                                                src="https://source.unsplash.com/150x150/?portrait?3"
                                                className="rounded-full"
                                                width={80}
                                            />
                                        </div>
                                    </div>
                                    <div className="flex flex-col text-center gap-1">
                                        <span className="text-2xl font-medium">
                                            Eka Jay
                                        </span>
                                        <span className="text-md text-gray-400">
                                            Teknik Informatika 1990
                                        </span>
                                    </div>
                                    <p className="text-center text-md text-gray-800">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione, labore illum. Similiq
                                    </p>
                                    <Link href={route("profile.edit")}>
                                        <div className="px-20 mt-1">
                                            <PrimaryButton className="h-8 text-xs bg-navy w-full text-white text-md rounded hover:shadow hover:bg-blue-800">
                                                Perbarui Profil
                                            </PrimaryButton>
                                        </div>
                                    </Link>
                                </div>
                            </div>
                        </div>
                    </div>
                    {/* end-profil */}
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
