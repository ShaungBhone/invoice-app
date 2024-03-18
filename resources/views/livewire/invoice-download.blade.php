<div class="max-w-2xl px-4 sm:px-6 lg:px-8 mx-auto my-4 sm:my-10">
    <div class="sm:w-11/12 lg:w-3/4 mx-auto bg-white rounded-xl">
        <div class="p-4 sm:p-7 overflow-y-auto">
            <div class="text-center">
                <h3 class="text-3xl font-semibold text-gray-800">
                    မဖြူလေး
                </h3>
                <p class="text-sm text-gray-500 mt-3">
                    ကုန်မျိုးစုံးရောင်း၀ယ်ရေး
                </p>
                <p class="text-sm text-gray-500 mt-3">
                    D-7၊ အမှတ် (၁) ဈေးကြီး၊ မော်လမြိုင်မြို
                </p>
                <div class="mt-5 flex items-center justify-between text-gray-500">
                    <div class="flex items-center">
                        <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.38028 8.85335C9.07627 10.303 10.0251 11.6616 11.2266 12.8632C12.4282 14.0648 13.7869 15.0136 15.2365 15.7096C15.3612 15.7694 15.4235 15.7994 15.5024 15.8224C15.7828 15.9041 16.127 15.8454 16.3644 15.6754C16.4313 15.6275 16.4884 15.5704 16.6027 15.4561C16.9523 15.1064 17.1271 14.9316 17.3029 14.8174C17.9658 14.3864 18.8204 14.3864 19.4833 14.8174C19.6591 14.9316 19.8339 15.1064 20.1835 15.4561L20.3783 15.6509C20.9098 16.1824 21.1755 16.4481 21.3198 16.7335C21.6069 17.301 21.6069 17.9713 21.3198 18.5389C21.1755 18.8242 20.9098 19.09 20.3783 19.6214L20.2207 19.779C19.6911 20.3087 19.4263 20.5735 19.0662 20.7757C18.6667 21.0001 18.0462 21.1615 17.588 21.1601C17.1751 21.1589 16.8928 21.0788 16.3284 20.9186C13.295 20.0576 10.4326 18.4332 8.04466 16.0452C5.65668 13.6572 4.03221 10.7948 3.17124 7.76144C3.01103 7.19699 2.93092 6.91477 2.9297 6.50182C2.92833 6.0436 3.08969 5.42311 3.31411 5.0236C3.51636 4.66357 3.78117 4.39876 4.3108 3.86913L4.46843 3.7115C4.99987 3.18006 5.2656 2.91433 5.55098 2.76999C6.11854 2.48292 6.7888 2.48292 7.35636 2.76999C7.64174 2.91433 7.90747 3.18006 8.43891 3.7115L8.63378 3.90637C8.98338 4.25597 9.15819 4.43078 9.27247 4.60655C9.70347 5.26945 9.70347 6.12403 9.27247 6.78692C9.15819 6.96269 8.98338 7.1375 8.63378 7.4871C8.51947 7.60142 8.46231 7.65857 8.41447 7.72538C8.24446 7.96281 8.18576 8.30707 8.26748 8.58743C8.29048 8.66632 8.32041 8.72866 8.38028 8.85335Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <a class="text-sm font-normal" href="tel:+959961559799">09961559799</a>
                    </div>

                    <div class="flex items-center">
                        <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 17.5H12.01M8.2 22H15.8C16.9201 22 17.4802 22 17.908 21.782C18.2843 21.5903 18.5903 21.2843 18.782 20.908C19 20.4802 19 19.9201 19 18.8V5.2C19 4.07989 19 3.51984 18.782 3.09202C18.5903 2.71569 18.2843 2.40973 17.908 2.21799C17.4802 2 16.9201 2 15.8 2H8.2C7.0799 2 6.51984 2 6.09202 2.21799C5.71569 2.40973 5.40973 2.71569 5.21799 3.09202C5 3.51984 5 4.0799 5 5.2V18.8C5 19.9201 5 20.4802 5.21799 20.908C5.40973 21.2843 5.71569 21.5903 6.09202 21.782C6.51984 22 7.07989 22 8.2 22ZM12.5 17.5C12.5 17.7761 12.2761 18 12 18C11.7239 18 11.5 17.7761 11.5 17.5C11.5 17.2239 11.7239 17 12 17C12.2761 17 12.5 17.2239 12.5 17.5Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <a class="text-sm font-normal">05726166(Ext:)1515</a>
                    </div>
                </div>
            </div>


            <!-- Grid -->
            <div class="mt-5 sm:mt-10 flex justify-between">
                <!-- End Col -->
                <div>
                    <span class="block text-xs uppercase text-gray-500">Invoice No:</span>
                    <span class="block text-sm font-medium text-gray-800">
                        {{ $invoice->number }}
                    </span>
                </div>

                <div>
                    <span class="block text-xs uppercase text-gray-500">Date paid:</span>
                    <span class="block text-sm font-medium text-gray-800">
                        {{ $invoice->invoice_date }}
                    </span>
                </div>
            </div>
            <!-- End Grid -->

            <!-- Table -->
            <div class="mt-6 border border-gray-200 p-4 rounded-lg space-y-4">
                <div class="hidden sm:grid sm:grid-cols-5">
                    <div class="sm:col-span-2 text-xs font-medium text-gray-500 uppercase">အမျိုးအမည်</div>
                    <div class="text-start text-xs font-medium text-gray-500 uppercase">ဦးရေ</div>
                    <div class="text-start text-xs font-medium text-gray-500 uppercase">နှုန်း</div>
                    <div class="text-end text-xs font-medium text-gray-500 uppercase">သင့်ငွေ</div>
                </div>

                <div class="hidden sm:block border-b border-gray-200"></div>

                @foreach ($invoice->items as $item)
                    <div class="grid grid-cols-3 sm:grid-cols-5 gap-2">
                        <div class="col-span-full sm:col-span-2">
                            <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">အမျိုးအမည်</h5>
                            <p class="font-medium text-gray-800">{{ $item->product->name }}</p>
                        </div>
                        <div>
                            <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">ဦးရေ</h5>
                            <p class="text-gray-800">{{ $item->qty }}</p>
                        </div>
                        <div>
                            <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">နှုန်း</h5>
                            <p class="text-gray-800">{{ $item->unit_price }}</p>
                        </div>
                        <div>
                            <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">သင့်ငွေ</h5>
                            <p class="sm:text-end text-gray-800">{{ $item->total }}</p>
                        </div>
                    </div>

                    <div class="hidden sm:block border-b border-gray-200"></div>
                @endforeach

                <div class="flex justify-end">
                    <div>
                        <span class="block text-xs uppercase text-gray-500">စုစုပေါင်း</span>
                        <span class="block text-end font-medium text-gray-800">
                            {{ $invoice->items->sum('total') }}
                        </span>
                    </div>
                </div>
            </div>

            <!-- End Table -->


            <!-- Button -->
            <div class="mt-5 flex justify-end gap-x-2">
                <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                    href="#" @click="window.print()">
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <polyline points="6 9 6 2 18 2 18 9" />
                        <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2" />
                        <rect width="12" height="8" x="6" y="14" />
                    </svg>
                    Print
                </a>
            </div>
            <!-- End Buttons -->
        </div>
    </div>
</div>
