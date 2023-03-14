import { Link } from "@inertiajs/react";

export default function NavLink({
    active = false,
    className = "",
    children,
    ...props
}) {
    return (
        <Link
            {...props}
            className={
                "text-decoration-none inline-flex items-center px-4 pt-1  leading-[4.6rem] transition duration-150 ease-in-out focus:outline-none " +
                (active
                    ? "border-gray-100 font-semibold text-black focus:border-indigo-700"
                    : "border-transparent text-gray-500  dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-700 focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700 ") +
                className
            }
        >
            {children}
        </Link>
    );
}
