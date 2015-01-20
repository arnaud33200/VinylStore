window.onload = function() {
    loadHeader();
};

function loadHeader() {
    document.getElementById('navigationBar').innerHTML = "<div class=\"container-fluid\">\
            <a class=\"navbar-brand\" href=\"index.html\">\
                <img alt=\"Brand\" src=\"logo.png\">\
            </a>\
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">\
                <ul class=\"nav navbar-nav\">\
                    <li class=\"dropdown\">\
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Vinyls <span class=\"caret\"></span></a>\
                        <ul class=\"dropdown-menu\" role=\"menu\">\
                            <li><a href=\"#\">Search</a></li>\
                            <li><a href=\"#\">Top</a></li>\
                            <li><a href=\"#\">Specials</a></li>\
                        </ul>\
                    </li>\
                    <li class=\"dropdown\">\
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Materials <span class=\"caret\"></span></a>\
                        <ul class=\"dropdown-menu\" role=\"menu\">\
                            <li><a href=\"#\">Action</a></li>\
                            <li><a href=\"#\">Another action</a></li>\
                            <li><a href=\"#\">Something else here</a></li>\
                            <li class=\"divider\"></li>\
                            <li><a href=\"#\">Separated link</a></li>\
                            <li class=\"divider\"></li>\
                            <li><a href=\"#\">One more separated link</a></li>\
                        </ul>\
                    </li>\
                    <li class=\"dropdown\">\
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Tips <span class=\"caret\"></span></a>\
                        <ul class=\"dropdown-menu\" role=\"menu\">\
                            <li><a href=\"#\">Action</a></li>\
                            <li><a href=\"#\">Another action</a></li>\
                            <li><a href=\"#\">Something else here</a></li>\
                        </ul>\
                    </li>\
                </ul>\
\
                <ul class=\"nav navbar-nav navbar-right\">\
                    <li class=\"dropdown\">\
                        <a href=\"profile.html\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">\
                        <span class=\"glyphicon glyphicon-shopping-cart\"</span></a>\
                        <ul class=\"dropdown-menu\" role=\"menu\">\
                            <li><a href=\"#\">Checkout Order</a></li>\
                        </ul>\
                    </li>\
                    <li><a href=\"profile.html\"><span class=\"glyphicon glyphicon-user\"</span></a></li>\
\
                </ul>\
\
            </div>";
}