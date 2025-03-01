<!-- Horizontal Menu Start -->
<header class="topnav">
    <nav class="navbar navbar-expand-lg">
        <nav class="page-container">
            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown hover-dropdown">
                        <a class="nav-link dropdown-toggle drop-arrow-none" href="index">
                            <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                            <span class="menu-text"> Dashboard </span>
                        </a>
                    </li>

                    <li class="nav-item dropdown hover-dropdown">
                        <a class="nav-link dropdown-toggle drop-arrow-none" href="#" id="topnav-apps" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="menu-icon"><i class="ti ti-apps"></i></span>
                            <span class="menu-text">Apps</span>
                            <div class="menu-arrow"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-apps">
                            <a href="apps-calendar" class="dropdown-item">Calendar</a>
                            <a href="apps-chat" class="dropdown-item">Chat</a>
                            <a href="apps-email" class="dropdown-item">Email</a>
                            <a href="apps-file-manager" class="dropdown-item">File Manager</a>
                            <a href="apps-projects" class="dropdown-item">Projects</a>
                            <div class="dropdown hover-dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-user"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    User
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-user">
                                    <a href="apps-user-contacts" class="dropdown-item">Contacts</a>
                                    <a href="apps-user-profile" class="dropdown-item">Profile</a>
                                </div>
                            </div>

                            <div class="dropdown hover-dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-tasks"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tasks
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-tasks">
                                    <a href="apps-kanban" class="dropdown-item">Kanban</a>
                                    <a href="apps-task-details" class="dropdown-item">View Details</a>
                                </div>
                            </div>

                            <div class="dropdown hover-dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-invoices"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Invoice
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-invoices">
                                    <a href="apps-invoices" class="dropdown-item">Invoices</a>
                                    <a href="apps-invoice-details" class="dropdown-item">View Invoice</a>
                                    <a href="apps-invoice-create" class="dropdown-item">Create Invoice</a>
                                </div>
                            </div>

                        </div>
                    </li>

                    <li class="nav-item dropdown hover-dropdown">
                        <a class="nav-link dropdown-toggle drop-arrow-none" href="#" id="topnav-pages" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="menu-icon"><i class="ti ti-file-description"></i></span>
                            <span class="menu-text">Pages</span>
                            <div class="menu-arrow"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-pages">
                            <div class="dropdown hover-dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-auth"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Authentication <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                    <a href="auth-login" class="dropdown-item">Login</a>
                                    <a href="auth-register" class="dropdown-item">Register</a>
                                    <a href="auth-logout" class="dropdown-item">Logout</a>
                                    <a href="auth-recoverpw" class="dropdown-item">Recover Password</a>
                                    <a href="auth-createpw" class="dropdown-item">Create Password</a>
                                    <a href="auth-lock-screen" class="dropdown-item">Lock Screen</a>
                                    <a href="auth-confirm-mail" class="dropdown-item">Confirm Mail</a>
                                    <a href="auth-login-pin" class="dropdown-item">Login with PIN</a>
                                </div>
                            </div>
                            <div class="dropdown hover-dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-error"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Error <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-error">
                                    <a href="error-401" class="dropdown-item">401 Unauthorized</a>
                                    <a href="error-400" class="dropdown-item">400 Bad Request</a>
                                    <a href="error-403" class="dropdown-item">403 Forbidden</a>
                                    <a href="error-404" class="dropdown-item">404 Not Found</a>
                                    <a href="error-500" class="dropdown-item">500 Internal Server</a>
                                    <a href="error-service-unavailable" class="dropdown-item">Service
                                        Unavailable</a>
                                    <a href="error-404-alt" class="dropdown-item">Error 404 Alt</a>
                                </div>
                            </div>
                            <a href="pages-starter" class="dropdown-item">Starter Page</a>
                            <a href="pages-faq" class="dropdown-item">FAQ</a>
                            <a href="pages-pricing" class="dropdown-item">Pricing</a>
                            <a href="pages-maintenance" class="dropdown-item">Maintenance</a>
                            <a href="pages-timeline" class="dropdown-item">Timeline</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown hover-dropdown">
                        <a class="nav-link dropdown-toggle drop-arrow-none" href="#" id="topnav-components"
                            role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="menu-icon"><i class="ti ti-components"></i></span>
                            <span class="menu-text">Components</span>
                            <div class="menu-arrow"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-components">
                            <div class="dropdown hover-dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-ui-kit"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Base UI 1
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-ui-kit">
                                    <a href="ui-accordions" class="dropdown-item">Accordions</a>
                                    <a href="ui-alerts" class="dropdown-item">Alerts</a>
                                    <a href="ui-avatars" class="dropdown-item">Avatars</a>
                                    <a href="ui-badges" class="dropdown-item">Badges</a>
                                    <a href="ui-breadcrumb" class="dropdown-item">Breadcrumb</a>
                                    <a href="ui-buttons" class="dropdown-item">Buttons</a>
                                    <a href="ui-cards" class="dropdown-item">Cards</a>
                                    <a href="ui-carousel" class="dropdown-item">Carousel</a>
                                    <a href="ui-dropdowns" class="dropdown-item">Dropdowns</a>
                                    <a href="ui-embed-video" class="dropdown-item">Embed Video</a>
                                    <a href="ui-grid" class="dropdown-item">Grid</a>
                                    <a href="ui-list-group" class="dropdown-item">List Group</a>
                                </div>
                            </div>
                            <div class="dropdown hover-dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-ui-kit2"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Base UI 2
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-ui-kit2">
                                    <a href="ui-modals" class="dropdown-item">Modals</a>
                                    <a href="ui-notifications" class="dropdown-item">Notifications</a>
                                    <a href="ui-offcanvas" class="dropdown-item">Offcanvas</a>
                                    <a href="ui-placeholders" class="dropdown-item">Placeholders</a>
                                    <a href="ui-pagination" class="dropdown-item">Pagination</a>
                                    <a href="ui-popovers" class="dropdown-item">Popovers</a>
                                    <a href="ui-progress" class="dropdown-item">Progress</a>
                                    <a href="ui-ribbons" class="dropdown-item">Ribbons</a>
                                    <a href="ui-spinners" class="dropdown-item">Spinners</a>
                                    <a href="ui-tabs" class="dropdown-item">Tabs</a>
                                    <a href="ui-tooltips" class="dropdown-item">Tooltips</a>
                                    <a href="ui-links" class="dropdown-item">Links</a>
                                    <a href="ui-typography" class="dropdown-item">Typography</a>
                                    <a href="ui-utilities" class="dropdown-item">Utilities</a>
                                </div>
                            </div>
                            <div class="dropdown hover-dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#"
                                    id="topnav-extended-ui" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Extended UI
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-extended-ui">
                                    <a href="extended-dragula" class="dropdown-item">Dragula</a>
                                    <a href="extended-sweetalerts" class="dropdown-item">Sweet Alerts</a>
                                    <a href="extended-ratings" class="dropdown-item">Ratings</a>
                                    <a href="extended-scrollbar" class="dropdown-item">Scrollbar</a>
                                </div>
                            </div>
                            <div class="dropdown hover-dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-forms"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Forms
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-forms">
                                    <a href="form-elements" class="dropdown-item">Basic Elements</a>
                                    <a href="form-inputmask" class="dropdown-item">Inputmask</a>
                                    <a href="form-picker" class="dropdown-item">Picker</a>
                                    <a href="form-select" class="dropdown-item">Select</a>
                                    <a href="form-range-slider" class="dropdown-item">Range Slider</a>
                                    <a href="form-validation" class="dropdown-item">Validation</a>
                                    <a href="form-wizard" class="dropdown-item">Wizard</a>
                                    <a href="form-fileuploads" class="dropdown-item">File Uploads</a>
                                    <a href="form-editors" class="dropdown-item">Editors</a>
                                    <a href="form-layouts" class="dropdown-item">Layouts</a>
                                </div>
                            </div>
                            <div class="dropdown hover-dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-charts"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Charts
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg" aria-labelledby="topnav-charts">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="charts-apex-area" class="dropdown-item">Area</a>
                                            <a href="charts-apex-bar" class="dropdown-item">Bar</a>
                                            <a href="charts-apex-bubble" class="dropdown-item">Bubble</a>
                                            <a href="charts-apex-candlestick" class="dropdown-item">Candlestick</a>
                                            <a href="charts-apex-column" class="dropdown-item">Column</a>
                                            <a href="charts-apex-heatmap" class="dropdown-item">Heatmap</a>
                                            <a href="charts-apex-line" class="dropdown-item">Line</a>
                                            <a href="charts-apex-mixed" class="dropdown-item">Mixed</a>
                                            <a href="charts-apex-timeline" class="dropdown-item">Timeline</a>
                                            <a href="charts-apex-boxplot" class="dropdown-item">Boxplot</a>
                                        </div>

                                        <div class="col-md-6">
                                            <a href="charts-apex-treemap" class="dropdown-item">Treemap</a>
                                            <a href="charts-apex-pie" class="dropdown-item">Pie</a>
                                            <a href="charts-apex-radar" class="dropdown-item">Radar</a>
                                            <a href="charts-apex-radialbar" class="dropdown-item">RadialBar</a>
                                            <a href="charts-apex-scatter" class="dropdown-item">Scatter</a>
                                            <a href="charts-apex-polar-area" class="dropdown-item">Polar Area</a>
                                            <a href="charts-apex-sparklines" class="dropdown-item">Sparklines</a>
                                            <a href="charts-apex-slope" class="dropdown-item">Slope</a>
                                            <a href="charts-apex-funnel" class="dropdown-item">Funnel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown hover-dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-tables"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tables
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-tables">
                                    <a href="tables-basic" class="dropdown-item">Basic Tables</a>
                                    <a href="tables-gridjs" class="dropdown-item">Gridjs Tables</a>
                                    <a href=".tables-datatable" class="dropdown-item">Datatable Tables</a>
                                </div>
                            </div>
                            <div class="dropdown hover-dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-icons"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Icons
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                    <a href="icons-tabler" class="dropdown-item">Tabler Icons</a>
                                    <a href="icons-remix" class="dropdown-item">Remixicon Icons</a>
                                    <a href="icons-solar" class="dropdown-item">Solar Design</a>
                                </div>
                            </div>
                            <div class="dropdown hover-dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-maps"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Maps
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-maps">
                                    <a href="maps-google" class="dropdown-item">Google Maps</a>
                                    <a href="maps-vector" class="dropdown-item">Vector Maps</a>
                                    <a href="maps-leaflet" class="dropdown-item">Leaflet Maps</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown hover-dropdown">
                        <a class="nav-link dropdown-toggle drop-arrow-none" href="#" id="topnav-layouts" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="menu-icon"><i class="ti ti-layout"></i></span>
                            <span class="menu-text">Layouts</span>
                            <div class="menu-arrow"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-layouts">
                            <a href="index" class="dropdown-item" target="_blank">Vertical</a>
                            <a href="layouts-horizontal" class="dropdown-item" target="_blank">Horizontal</a>
                            <a href="layouts-detached" class="dropdown-item" target="_blank">Detached</a>
                            <a href="layouts-full" class="dropdown-item" target="_blank">Full</a>
                            <a href="layouts-fullscreen" class="dropdown-item" target="_blank">Fullscreen</a>
                            <a href="layouts-hover" class="dropdown-item" target="_blank">Hover Menu</a>
                            <a href="layouts-compact" class="dropdown-item" target="_blank">Compact Menu</a>
                            <a href="layouts-icon-view" class="dropdown-item" target="_blank">Icon View</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </nav>
</header>
<!-- Horizontal Menu End -->