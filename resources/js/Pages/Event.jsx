import PrimaryButton from "@/Components/PrimaryButton";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head } from "@inertiajs/react";

export default function Newsletter(props) {
    return (
        <AuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
            header={
                <div>
                    <div className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        Activities and Job Vacancy
                    </div>
                    <div className="font-medium text-base text-gray-800 dark:text-gray-200 leading-tight pt-2">
                        Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Odit ipsa consequatur, illum est cum, expedita
                        repudiandae accusamus nesciunt inventore architecto sed
                        amet magni facilis eius nulla doloribus rerum commodi
                        quibusdam?
                    </div>
                </div>
            }
        >
            <Head title="Event" />

            <section className="mt-6 lg:mt-11 dark:bg-gray-800 dark:text-gray-100 bg-white">
                <div className="container space-y-12  ">
                    <div className="flex flex-col overflow-hidden shadow-sm lg:flex-row pt-7">
                        <img
                            src="https://source.unsplash.com/640x480/?1"
                            alt=""
                            className="h-80 dark:bg-gray-500 aspect-video"
                        />
                        <div className="flex flex-col justify-center flex-1 p-6 dark:bg-gray-900">
                            <span className="text-xs uppercase dark:text-gray-400">
                                Join, it's free
                            </span>
                            <h3 className="text-3xl font-bold">
                                We're not reinventing the wheel
                            </h3>
                            <p className="my-6 dark:text-gray-400">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Dolor aliquam possimus quas,
                                error esse quos.
                            </p>
                            {/* <link></link> */}
                            <PrimaryButton className="self-start !w-32 rounded-md">
                                Find Out More
                            </PrimaryButton>
                        </div>
                    </div>
                    <div className="flex flex-col overflow-hidden shadow-sm lg:flex-row-reverse">
                        <img
                            src="https://source.unsplash.com/640x480/?2"
                            alt=""
                            className="h-80 dark:bg-gray-500 aspect-video"
                        />
                        <div className="flex flex-col justify-center flex-1 p-6 dark:bg-gray-900">
                            <span className="text-xs uppercase dark:text-gray-400">
                                Join, it's free
                            </span>
                            <h3 className="text-3xl font-bold">
                                We're not reinventing the wheel
                            </h3>
                            <p className="my-6 dark:text-gray-400">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Dolor aliquam possimus quas,
                                error esse quos.
                            </p>
                            <button type="button" className="self-start">
                                Action
                            </button>
                        </div>
                    </div>
                    <div className="flex flex-col overflow-hidden shadow-sm lg:flex-row">
                        <img
                            src="https://source.unsplash.com/640x480/?3"
                            alt=""
                            className="h-80 dark:bg-gray-500 aspect-video"
                        />
                        <div className="flex flex-col justify-center flex-1 p-6 dark:bg-gray-900">
                            <span className="text-xs uppercase dark:text-gray-400">
                                Join, it's free
                            </span>
                            <h3 className="text-3xl font-bold">
                                We're not reinventing the wheel
                            </h3>
                            <p className="my-6 dark:text-gray-400">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Dolor aliquam possimus quas,
                                error esse quos.
                            </p>
                            <button type="button" className="self-start">
                                Action
                            </button>
                        </div>
                    </div>
                    <div className="flex flex-col overflow-hidden shadow-sm lg:flex-row-reverse">
                        <img
                            src="https://source.unsplash.com/640x480/?2"
                            alt=""
                            className="h-80 dark:bg-gray-500 aspect-video"
                        />
                        <div className="flex flex-col justify-center flex-1 p-6 dark:bg-gray-900">
                            <span className="text-xs uppercase dark:text-gray-400">
                                Join, it's free
                            </span>
                            <h3 className="text-3xl font-bold">
                                We're not reinventing the wheel
                            </h3>
                            <p className="my-6 dark:text-gray-400">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Dolor aliquam possimus quas,
                                error esse quos.
                            </p>
                            <button type="button" className="self-start">
                                Action
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        </AuthenticatedLayout>
    );
}
