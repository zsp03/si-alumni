import NewsletterCard from "@/Components/NewsletterCard";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head } from "@inertiajs/react";

export default function Newsletter(props) {
    return (
        <AuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
            header={
                <h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    Newsletter
                </h2>
            }
        >
            <Head title="Newsletter" />

            <div className="flex py-10 px-10 gap-3">
                <NewsletterCard
                link="https://www.mockofun.com/wp-content/uploads/2020/12/time-magazine-cover-template-3.jpg"
                >
                </NewsletterCard>
                <NewsletterCard
                link="https://www.mockofun.com/wp-content/uploads/2020/12/time-magazine-cover-template-1.jpg"
                >
                </NewsletterCard>
                <NewsletterCard
                link="https://www.mockofun.com/wp-content/uploads/2020/12/time-magazine-cover-template-2.jpg"
                >
                </NewsletterCard>
                <NewsletterCard
                link="https://www.mockofun.com/wp-content/uploads/2020/12/time-magazine-cover-template-4.jpg"
                >
                </NewsletterCard>
            </div>
        </AuthenticatedLayout>
    );
}
