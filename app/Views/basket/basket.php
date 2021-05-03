<?php
$session = \Config\Services::session();
?>
<div class="container py-4">
    <div class="row ">
        <div class="col-6 col-sm-4 border-right px-1">
            <div class="container">
                <div class="border-bottom pb-3 ">
                    <strong class="pb-3 ">Shipping address</strong>
                </div>
                <div>
                    <div class="text-secondary pt-3">Keele University</div>
                    <div class="text-secondary">Keele</div>
                    <div class="text-secondary">Staffordshire</div>
                    <div class="text-secondary">ST5 5GB</div>
                    <div class="text-secondary">United Kingdom</div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 border-left text-end border-start ">
            <div class="container">
                <div class="">
                    <div class="row pb-3 ">
                        <div class="col-sm d-flex align-items-center">
                            <strong>Product</strong>
                        </div>
                        <div class="col-sm">
                            <strong>Price</strong>
                        </div>
                        <div class="col-sm">
                            <strong>Quantity</strong>
                        </div>
                    </div>
                </div>

                <div class="row py-3 border-bottom border-top">
                    <div class="col-3">
                        <?= img('images/test.jpg', false, 'width="100%" height="100%"') ?>
                    </div>
                    <!--class="badge bg-success text-wrap " style="width: 6rem;"   for background color -->
                    <div class="col-3 text-start d-flex align-items-center">
                        <div class="">
                            <p>
                                <strong>iPhone</strong>
                            </p>
                            <div class="text-secondary">
                                Black | 32 GB
                            </div>
                        </div>
                    </div>
                    <div class="col-3 d-flex align-items-center">
                        <div>
                            <p class="ms-4">&nbsp;$9999.99</p>
                        </div>
                    </div>
                    <div class="col-3 d-flex align-items-center">
                        <div class="number-input md-number-input">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus">-</button>
                            <input class="quantity" min="0" name="quantity" value="1" type="number">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus">+</button>
                        </div>
                    </div>
                </div>
                <div class="row py-3 border-bottom ">

                    <?php foreach (@$products as $basket): ?>
                        <tr>
                            <th scope="row"><?= $basket['id']; ?></th>
                            <td><a class="text-dark" href="/product/update/<?= $basket['id']; ?>"><?= $basket['quantity']; ?></a>
                            </td>
                            <td><?= $basket['quantity']; ?></td>
                            <td><?= $basket['price']; ?></td>
                        </tr>
                    <?php endforeach; ?>
<!--                    <form class="d-flex ">-->
<!--                        <input class="form-control me-2" type="search" placeholder="Discount code" aria-label="Search">-->
<!--                        <button class="btn btn-outline-success" type="submit">Apply</button>-->
<!--                    </form>-->
                    <div class="row g-2">
                        <div class="col-11">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com">
                                <label for="floatingInputGrid">Discount code</label>
                            </div>
                        </div>
                        <div class="col-1 d-flex align-items-center">
                            <button class="btn btn-outline-success" type="submit">Apply</button>
                        </div>
                    </div>
                </div>
                <div class="row py-3 text-start border-bottom">
                    <div class="row">
                        <div class="col">
                            <p><strong>Subtotal</strong></p>
                        </div>
                        <div class="col text-end">
                            <p>£9900.00</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="text-secondary">VAT 20%</div>
                        </div>
                        <div class="col text-end text-secondary">
                            99.99
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row py-3 text-start border-bottom">
                        <div class="row">
                            <div class="col">
                                <p class="h3"><strong>Total</strong></p>
                            </div>
                            <div class="col text-end h3">
                                <p>£9999.99</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-5 ">
                    <div class="d-flex justify-content-center">
                        <form>
                            <button type="submit" class="btn btn-dark btn-lg">Checkout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
