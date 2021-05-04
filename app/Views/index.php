<!--TODO:Add transitions ( first div ( fadeIn) second   -->
<div class="container fadeIn">
    <div class="row pt-4 pb-4">
        <div class="col-6 col-md-3 border-right">
            <aside>

                <div class="accordion" id="accordionExample">

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <strong>Laptops & Phones</strong>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-------------------------------------------------- inside accordion ----------------------------------------------------->
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                    aria-expanded="false" aria-controls="flush-collapseOne">
                                                <i class="fas fa-laptop"></i> &nbsp; Laptops
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                             aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <!------------------------------------- Inside accordion 2--------------------------->
                                                <ul class="list-group">
                                                    <!--                                                    <li class="list-group-item d-flex justify-content-between align-items-start">-->
                                                    <!--                                                        <div class="ms-2 me-auto">-->
                                                    <!--                                                            <div class="fw-bold"><a href="#" onclick="return sortProducts('all')">All Laptops</a>-->
                                                    <!--                                                        </div>-->
                                                    <!--                                                         replace number with database stock -->
                                                    <!--                                                        <span class="badge bg-primary rounded-pill">14</span>-->
                                                    <!--                                                    </li>-->
                                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                                        <div class="ms-2 me-auto">
                                                            <div class="fw-bold"><a href="#"
                                                                                    onclick="return sortProducts('lenovo')"><img
                                                                            src="/images/logos/lenovo.svg" alt="lenovo"
                                                                            width="40" height="20">Lenovo</a></div>
                                                        </div>
                                                        <!-- replace number with database stock -->
                                                        <span class="badge bg-primary rounded-pill">14</span>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                                        <div class="ms-2 me-auto">
                                                            <div class="fw-bold"><a href="#"
                                                                                    onclick="return sortProducts('hp')"><img
                                                                            src="/images/logos/hp.svg"
                                                                            alt="HP" width="40"
                                                                            height="20">HP</a>
                                                            </div>
                                                        </div>
                                                        <span class="badge bg-primary rounded-pill">14</span>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                                        <div class="ms-2 me-auto">
                                                            <div class="fw-bold"><a href="#"
                                                                                    onclick="return sortProducts('dell')"><img
                                                                            src="/images/logos/dell.svg"
                                                                            alt="Dell" width="40"
                                                                            height="20">Dell</a>
                                                            </div>
                                                        </div>
                                                        <span class="badge bg-primary rounded-pill">14</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                    aria-expanded="false" aria-controls="flush-collapseTwo">
                                                <i class="fas fa-mobile-alt fa-lg"></i> &nbsp; &nbsp; Phones
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                             aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <ol class="list-group">
                                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                                        <div class="ms-2 me-auto">
                                                            <div class="fw-bold"><a href="#"
                                                                                    onclick="return sortProducts('samsung')">
                                                                    <img
                                                                            src="/images/logos/samsung.svg"
                                                                            alt="Samsung"
                                                                            width="40" height="20">Samsung</a></div>
                                                        </div>
                                                        <!-- replace number with database stock -->
                                                        <span class="badge bg-primary rounded-pill">14</span>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                                        <div class="ms-2 me-auto">
                                                            <div class="fw-bold "><a href="#"
                                                                                     onclick="return sortProducts('apple')"><img
                                                                            src="/images/logos/apple.svg" alt="Apple"
                                                                            width="40" height="20"> iPhone </a></div>
                                                        </div>
                                                        <span class="badge bg-primary rounded-pill">14</span>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                                        <div class="ms-2 me-auto">
                                                            <div class="fw-bold"><a href="#"
                                                                                    onclick="return sortProducts('huawei')"><img
                                                                            src="/images/logos/huawei.svg" alt="Huawei"
                                                                            width="40" height="20">Huawei</a></div>
                                                        </div>
                                                        <span class="badge bg-primary rounded-pill">14</span>
                                                    </li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <strong>Electronics</strong>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud e
                                xercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a href="#" onclick="return sortProducts('all')" class="btn form-control btn-secondary "
                       tabindex="-1" role="button" aria-disabled="true">Clear Filters</a>
                </div>
            </aside>
        </div>

        <!--------------------Right hand site of the page ------------------------------>
        <div class="col-12 col-md-9 border-left">

            <div>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search in products" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>


            <div class="mt-3">
                <!--                                <div class="mt-2">-->
                <!--                                    <h1 class="brandbrand"><strong>Showing results for </strong></h1>-->
                <!--                -->
                <!--                                </div>-->
                <!-- The children of AJAX-->
                <div id="products" class="row row-cols-1 row-cols-md-2 g-4 flex">

                </div>
            </div>
        </div>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>


<script>

    function sortProducts(brand) {
        history.pushState(brand, '', brand);
        $.getJSON("product/sort/" + brand, function () {
            console.log("Made request successfully!");
        })
            // $('brand').appendTo($(".brandbrand"));
            .done(function (data) {
                document.querySelector("#products").innerHTML = '';
                let content = '';
                data.forEach(product => {
                    content += `
                        <div class="col">
                        <div class="card" >
                                                <div id="carouselExampleControls${product.name.replace(/\s/g, '')}" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/images/Carousel1/${product.image}" class="d-block w-100 h-50" alt="${product.name.replace(/\s/g, '')}">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/Carousel2/${product.image}" class="d-block img-fluid" alt="${product.name.replace(/\s/g, '')}">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/Carousel3/${product.image}" class="d-block img-fluid" alt="${product.name.replace(/\s/g, '')}">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls${product.name.replace(/\s/g, '')}" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls${product.name.replace(/\s/g, '')}" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                            <div class="card-body">
                                <h5 class="card-title">${product.name}</h5>
                                <p class="card-text">${product.description}</p>
                            </div>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><div class="container">
                                      <div class="row">
                                        <div class="col-sm">
                                          Brand:
                                        </div>
                                        <div class="col-sm text-end">
                                          ${product.brand}
                                        </div>
                                      </div>
                                    </div>
                                 </li>
                                <li class="list-group-item"><div class="container">
                                      <div class="row">
                                        <div class="col-sm test-start">
                                          Price:
                                        </div>
                                        <div class="col-sm text-end">
                                          &pound;${product.price}
                                        </div>
                                      </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="card-body">
                                    <div>
                                            <div class="container">
                                              <div class="row">
                                                <div class="col-sm">
                                                  <input type="number" id="qty${product.id}" class="form-control"
                                                   min="1" value="1">
                                                </div>
                                                <div class="col-sm">
                                                  <button type="submit" class="btn btn-dark btn-sm" onclick="addToCart(${product.id})">Add to basket</button>
                                                </div>
                                              </div>
                                            </div>
                                    </div>
                            </div>
                        </div>
                    </div>`;
                });
                document.querySelector("#products").innerHTML = content;
            })
            .fail(function () {
                console.log("No products found.");
                document.querySelector("#products").innerHTML = '';
            });
    }

    function addToCart(productID) {
        let quantity = parseInt($('#qty' + productID).val());
        $.getJSON("/basket/addBasket/" + productID + "/" + quantity, function (data) {
            console.log("Made request successfully!");
        })
            .done(function (data) {
                //TODO: put toast when adding to cart https://getbootstrap.com/docs/5.0/components/toasts/
            })
            .fail(function (data) {
                alert(data.message.error)
            });
    }

    $(document).ready(function () {
        sortProducts('all');
        console.log('All products on display');
    })

</script>




