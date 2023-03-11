<>
    {/* header */}
    <header>
        <a href="#">
            <img src="image/unhas logo.svg" alt="logo unhas" />
        </a>
        <div className="portal fw-bold">
            <p>Portal Alumni</p>
        </div>
    </header>
    {/* Navigasi */}
    <nav
        className="navbar navbar-expand-lg"
        style={{ backgroundColor: "#2b2d42" }}
    >
        <div className="container-fluid">
            {/* <a class="navbar-brand" href="#">Navbar</a> */}
            <button
                className="navbar-toggler text-white"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span className="navbar-toggler-icon" />
            </button>
            <div
                className="collapse navbar-collapse justify-content-between fw-medium pe-3"
                id="navbarNav"
            >
                <ul className="navbar-nav">
                    <li className="nav-item">
                        <a
                            className="nav-link active text-white"
                            aria-current="page"
                            href="#"
                        >
                            Home
                        </a>
                    </li>
                    <li className="nav-item">
                        <a
                            className="nav-link active text-white"
                            aria-current="page"
                            href="#"
                        >
                            Even
                        </a>
                    </li>
                    <li className="nav-item">
                        <a
                            className="nav-link active text-white"
                            aria-current="page"
                            href="#"
                        >
                            Newsletter
                        </a>
                    </li>
                    <li className="nav-item">
                        <a
                            className="nav-link active text-white"
                            aria-current="page"
                            href="#"
                        >
                            Donasi
                        </a>
                    </li>
                </ul>
                <div>
                    <a href="#" className="text-decoration-none text-white p-2">
                        Logout
                    </a>
                    <img
                        src="image/download.jpeg"
                        alt="maylinda"
                        className="rounded-circle"
                        width={40}
                    />
                </div>
            </div>
        </div>
    </nav>
</>;
