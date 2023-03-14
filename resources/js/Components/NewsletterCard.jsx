export default function NewsletterCard({
    children,
    ...props
}) {
    return (
        <div className="flex flex-col max-w-xs shadow-md bg-gray-50 text-gray-900">
                    <img
                        src={props.link}
                        alt=""
                        className="object-cover object-center w-full bg-gray-500"
                    />
                    <div className="flex flex-col p-3">
                        <h2 className="text-xl font-semibold tracking-wide">
                            Nam maximus purus
                        </h2>
                        <span className="text-xs">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget elit vitae purus gravida dictum.
                        </span>
                    </div>
                </div>
    );
}
