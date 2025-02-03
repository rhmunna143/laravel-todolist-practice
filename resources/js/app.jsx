import React from "react";
import ReactDOM from "react-dom/client";

function App() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">App component</div>

                        <div className="card-body">
                            I'm an App component
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}

if (document.getElementById("app")) {
    const Index = ReactDOM.createRoot(document.getElementById("app"));

    Index.render(
        <React.StrictMode>
            <App />
        </React.StrictMode>
    );
}
