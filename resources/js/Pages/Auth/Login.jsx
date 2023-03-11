import { useEffect } from "react";
import Checkbox from "@/Components/Checkbox";
import GuestLayout from "@/Layouts/GuestLayout";
import InputError from "@/Components/InputError";
import InputLabel from "@/Components/InputLabel";
import PrimaryButton from "@/Components/PrimaryButton";
import TextInput from "@/Components/TextInput";
import { Head, Link, useForm } from "@inertiajs/react";

export default function Login({ status, canResetPassword }) {
    const { data, setData, post, processing, errors, reset } = useForm({
        email: "",
        password: "",
        remember: "",
    });

    useEffect(() => {
        return () => {
            reset("password");
        };
    }, []);

    const handleOnChange = (event) => {
        setData(
            event.target.name,
            event.target.type === "checkbox"
                ? event.target.checked
                : event.target.value
        );
    };

    const submit = (e) => {
        e.preventDefault();

        post(route("login"));
    };

    return (
        <section className="login d-flex ">
            <div className="login-left w-50 h-100">
                <div className="row justify-content-center align-items-center h-100">
                    <div className="col-7">
                        <div className="header">
                            <p>Selamat datang di Portal Alumni</p>
                            <h1>Universitas Hasanuddin</h1>
                        </div>
                        <form onSubmit={submit} className="login-form">
                            <InputLabel htmlFor="email" value="Email" />
                            <input
                                id="email"
                                type="email"
                                name="email"
                                value={data.email}
                                className="mt-1 block w-full"
                                autoComplete="username"
                                isFocused={true}
                                onChange={handleOnChange}
                                placeholder="Masukkan Email Anda"
                            />
                            <InputError
                                message={errors.email}
                                className="mt-2"
                            />

                            <InputLabel htmlFor="password" value="Sandi" />
                            <input
                                type="password"
                                className="form-control"
                                id="password"
                                name="password"
                                value={data.password}
                                autoComplete="current-password"
                                onChange={handleOnChange}
                                placeholder="Masukkan Sandi Anda"
                            />
                            <InputError
                                message={errors.password}
                                className="mt-2"
                            />

                            <div className="mb-3 mt-3">
                                {canResetPassword && (
                                    <Link
                                        href={route("password.request")}
                                        className="text-center"
                                    >
                                        Lupa Password
                                    </Link>
                                )}

                                <PrimaryButton
                                    className="signin"
                                    disabled={processing}
                                >
                                    Sign In
                                </PrimaryButton>
                            </div>
                        </form>
                        <div className="text-center">
                            <span className="d-inline">
                                Don't Have a Account? &nbsp;
                                <a
                                    href={route("register")}
                                    className="buatAkun text-decoration-none text-black font-semibold"
                                >
                                    Buat Akun
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div className="login-right w-50 h-100">
                <div
                    id="carouselExampleAutoplaying"
                    className="carousel slide"
                    data-bs-ride="carousel"
                >
                    <div className="carousel-inner">
                        <div className="carousel-item active">
                            <img
                                src="/asset/image/alumni1.jpg"
                                className="d-block w-100"
                                alt="unhas"
                            />
                        </div>
                        <div className="carousel-item">
                            <img
                                src="/asset/image/alumni2.jpg"
                                className="d-block w-100"
                                alt="unhas"
                            />
                        </div>
                        <div className="carousel-item">
                            <img
                                src="/asset/image/alumni3.jpg"
                                className="d-block w-100"
                                alt="unhas"
                            />
                        </div>
                    </div>
                    <button
                        className="carousel-control-prev"
                        type="button"
                        data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev"
                    >
                        <span
                            className="carousel-control-prev-icon"
                            aria-hidden="true"
                        ></span>
                        <span className="visually-hidden">Previous</span>
                    </button>
                    <button
                        className="carousel-control-next"
                        type="button"
                        data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next"
                    >
                        <span
                            className="carousel-control-next-icon"
                            aria-hidden="true"
                        ></span>
                        <span className="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>

        // <GuestLayout>
        //     <Head title="Log in" />

        //     {status && <div className="mb-4 font-medium text-sm text-green-600">{status}</div>}

        //     <form onSubmit={submit}>
        //         <div>
        //             <InputLabel htmlFor="email" value="Email" />

        //             <TextInput
        //                 id="email"
        //                 type="email"
        //                 name="email"
        //                 value={data.email}
        //                 className="mt-1 block w-full"
        //                 autoComplete="username"
        //                 isFocused={true}
        //                 onChange={handleOnChange}
        //             />

        //             <InputError message={errors.email} className="mt-2" />
        //         </div>

        //         <div className="mt-4">
        //             <InputLabel htmlFor="password" value="Password" />

        //             <TextInput
        //                 id="password"
        //                 type="password"
        //                 name="password"
        //                 value={data.password}
        //                 className="mt-1 block w-full"
        //                 autoComplete="current-password"
        //                 onChange={handleOnChange}
        //             />

        //             <InputError message={errors.password} className="mt-2" />
        //         </div>

        //         <div className="block mt-4">
        //             <label className="flex items-center">
        //                 <Checkbox name="remember" value={data.remember} onChange={handleOnChange} />
        //                 <span className="ml-2 text-sm text-gray-600 dark:text-gray-400">Remember me</span>
        //             </label>
        //         </div>

        //         <div className="flex items-center justify-end mt-4">
        //             {canResetPassword && (
        //                 <Link
        //                     href={route('password.request')}
        //                     className="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
        //                 >
        //                     Forgot your password?
        //                 </Link>
        //             )}

        //             <PrimaryButton className="ml-4" disabled={processing}>
        //                 Log in
        //             </PrimaryButton>
        //         </div>
        //     </form>
        // </GuestLayout>
    );
}
