<template>
    <div class="container">
        <main>
            <div class="py-5 text-center">
                <h2 class="mt-4">Payment form</h2>
            </div>

            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4
                        class="d-flex justify-content-between align-items-center mb-3"
                    >
                        <span class="text-primary">Your Bill</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li
                            class="list-group-item d-flex justify-content-between lh-sm"
                        >
                            <div>
                                <h6 class="my-0">Product name</h6>
                                <small class="text-muted"
                                    >Brief description</small
                                >
                            </div>
                            <span class="text-muted">$12</span>
                        </li>
                        <li
                            class="list-group-item d-flex justify-content-between lh-sm"
                        >
                            <div>
                                <h6 class="my-0">Shipping Bill</h6>
                                <small class="text-muted"
                                    >Brief description</small
                                >
                            </div>
                            <span class="text-muted">$4</span>
                        </li>
                        <li
                            class="list-group-item d-flex justify-content-between"
                        >
                            <span>Total (USD)</span>
                            <strong>$16</strong>
                        </li>
                    </ul>

                    <form class="card p-2">
                        <div class="input-group justify-content-end">
                            <button
                                type="submit"
                                class="w-100 btn btn-secondary"
                            >
                                Checkout
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Billing address</h4>
                    <form class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label"
                                    >First name</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="firstName"
                                    placeholder=""
                                    value=""
                                    required
                                />
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label"
                                    >Last name</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="lastName"
                                    placeholder=""
                                    value=""
                                    required
                                />
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="phone-number" class="form-label"
                                    >Phone Number</label
                                >
                                <div class="input-group has-validation">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="phone-number"
                                        placeholder="+628xxxxx"
                                        required
                                    />
                                    <div class="invalid-feedback">
                                        Your Phone Number is required.
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label"
                                    >Email
                                    <span class="text-muted"
                                        >(Optional)</span
                                    ></label
                                >
                                <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    placeholder="you@example.com"
                                />
                                <div class="invalid-feedback">
                                    Please enter a valid email address for
                                    shipping updates.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="address" class="form-label"
                                    >Address</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="address"
                                    placeholder="Jalan ...."
                                    required
                                />
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="city" class="form-label"
                                    >City</label
                                >
                                <select class="form-select" id="city" required>
                                    <option value="">Choose...</option>
                                    <option>Balikpapan</option>
                                    <option>Jakarta</option>
                                    <option>Surabaya</option>
                                    <option>Palembang</option>
                                    <option>Makassar</option>
                                    <option>Bandung</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid city.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="kecamatan" class="form-label"
                                    >Kecamatan</label
                                >
                                <select
                                    class="form-select"
                                    id="kecamatan"
                                    required
                                >
                                    <option value="">Choose...</option>
                                    <option>Kecamatan .....</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Kecamatan.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="Kelurahan" class="form-label"
                                    >Kelurahan</label
                                >
                                <select
                                    class="form-select"
                                    id="Kelurahan"
                                    required
                                >
                                    <option value="">Choose...</option>
                                    <option>Kelurahan .....</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Kelurahan.
                                </div>
                            </div>
                        </div>

                        <hr class="my-4" />

                        <div class="form-check">
                            <input
                                type="checkbox"
                                class="form-check-input"
                                id="same-address"
                            />
                            <label class="form-check-label" for="same-address"
                                >Shipping address is the same as my billing
                                address</label
                            >
                        </div>

                        <div class="form-check">
                            <input
                                type="checkbox"
                                class="form-check-input"
                                id="save-info"
                            />
                            <label class="form-check-label" for="save-info"
                                >Save this information for next time</label
                            >
                        </div>

                        <hr class="my-4" />

                        <h4 class="mb-3">Payment</h4>

                        <div class="my-3">
                            <div class="form-check">
                                <input
                                    id="credit"
                                    name="paymentMethod"
                                    type="radio"
                                    class="form-check-input"
                                    checked
                                    required
                                />
                                <label class="form-check-label" for="credit"
                                    >Credit card</label
                                >
                            </div>
                            <div class="form-check">
                                <input
                                    id="debit"
                                    name="paymentMethod"
                                    type="radio"
                                    class="form-check-input"
                                    required
                                />
                                <label class="form-check-label" for="debit"
                                    >Debit card</label
                                >
                            </div>
                            <div class="form-check">
                                <input
                                    id="paypal"
                                    name="paymentMethod"
                                    type="radio"
                                    class="form-check-input"
                                    required
                                />
                                <label class="form-check-label" for="paypal"
                                    >PayPal</label
                                >
                            </div>
                        </div>

                        <div class="row gy-3">
                            <div class="col-md-6">
                                <label for="cc-name" class="form-label"
                                    >Name on card</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="cc-name"
                                    placeholder=""
                                    required
                                />
                                <small class="text-muted"
                                    >Full name as displayed on card</small
                                >
                                <div class="invalid-feedback">
                                    Name on card is required
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="cc-number" class="form-label"
                                    >Credit card number</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="cc-number"
                                    placeholder=""
                                    required
                                />
                                <div class="invalid-feedback">
                                    Credit card number is required
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="cc-expiration" class="form-label"
                                    >Expiration</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="cc-expiration"
                                    placeholder=""
                                    required
                                />
                                <div class="invalid-feedback">
                                    Expiration date required
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="cc-cvv" class="form-label"
                                    >CVV</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="cc-cvv"
                                    placeholder=""
                                    required
                                />
                                <div class="invalid-feedback">
                                    Security code required
                                </div>
                            </div>
                        </div>

                        <hr class="my-4" />

                        <button
                            class="w-100 btn btn-primary btn-lg"
                            type="submit"
                        >
                            Continue to checkout
                        </button>
                    </form>
                </div>
            </div>
        </main>
    </div>
</template>

<script>
import "../assets/payment";
export default {
    name: "PaymentView",
};
</script>
<style scoped>
.container {
    max-width: 960px;
}
</style>
