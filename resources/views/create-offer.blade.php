<!DOCTYPE html>
<html>
    <head>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"
        />
        <meta charset="UTF-8" />
        <title>Offerable</title>

        <link
            href="https://unpkg.com/cirrus-ui"
            type="text/css"
            rel="stylesheet"
        />

        <link
            href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css?family=Oswald"
            rel="stylesheet"
        />

        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
            integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="form.css">
      
        <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"
        ></script>
    </head>
    <body>
        <div class="hero fullscreen">
            <div class="hero-body">
                <div style="margin: auto">
                    <form class="frame p-0" method="post">
                        <div class="frame__body p-0">
                            <div class="row p-0 level fill-height">
                                <div class="col">
                                    <div class="space xlarge"></div>
                                    <div class="padded">
                                        <h1 class="u-text-center u-font-alt">Offerable</h1>
                                        <div class="divider"></div>
                                        <div class="form-group">
                                            <label class="form-group-label">
                                                <span class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"/></svg>
                                                </span>
                                            </label>
                                            <input type="text" class="form-group-input" placeholder="Enter your name" />
                                        </div>

                                        <div class="form-group">
                                            <label class="form-group-label">
                                                <span class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z"/></svg>
                                                </span>
                                            </label>
                                            <input type="email" class="form-group-input" placeholder="Enter your email" />
                                        </div>

                                        <div class="form-section section-inline">
                                            <div class="section-body row">
                                                <div class="form-group col-6 pl-0">
                                                    <label class="form-group-label">
                                                        <span class="icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                                <path d="M568.2 336.3c-13.12-17.81-38.14-21.66-55.93-8.469l-119.7 88.17h-120.6c-8.748 0-15.1-7.25-15.1-15.99c0-8.75 7.25-16 15.1-16h78.25c15.1 0 30.75-10.88 33.37-26.62c3.25-20-12.12-37.38-31.62-37.38H191.1c-26.1 0-53.12 9.25-74.12 26.25l-46.5 37.74L15.1 383.1C7.251 383.1 0 391.3 0 400v95.98C0 504.8 7.251 512 15.1 512h346.1c22.03 0 43.92-7.188 61.7-20.27l135.1-99.52C577.5 379.1 581.3 354.1 568.2 336.3zM279.3 175C271.7 173.9 261.7 170.3 252.9 167.1L248 165.4C235.5 160.1 221.8 167.5 217.4 179.1s2.121 26.2 14.59 30.64l4.655 1.656c8.486 3.061 17.88 6.095 27.39 8.312V232c0 13.25 10.73 24 23.98 24s24-10.75 24-24V221.6c25.27-5.723 42.88-21.85 46.1-45.72c8.688-50.05-38.89-63.66-64.42-70.95L288.4 103.1C262.1 95.64 263.6 92.42 264.3 88.31c1.156-6.766 15.3-10.06 32.21-7.391c4.938 .7813 11.37 2.547 19.65 5.422c12.53 4.281 26.21-2.312 30.52-14.84s-2.309-26.19-14.84-30.53c-7.602-2.627-13.92-4.358-19.82-5.721V24c0-13.25-10.75-24-24-24s-23.98 10.75-23.98 24v10.52C238.8 40.23 221.1 56.25 216.1 80.13C208.4 129.6 256.7 143.8 274.9 149.2l6.498 1.875c31.66 9.062 31.15 11.89 30.34 16.64C310.6 174.5 296.5 177.8 279.3 175z"/></svg>
                                                        </span>
                                                    </label>
                                                    <input type="price" class="form-group-input" placeholder="Price" />
                                                </div>
                                                <div class="form-group col-6 pr-0">
                                                    <label class="form-group-label">
                                                        <span class="icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M88 48C101.3 48 112 58.75 112 72V120C112 133.3 101.3 144 88 144H40C26.75 144 16 133.3 16 120V72C16 58.75 26.75 48 40 48H88zM480 64C497.7 64 512 78.33 512 96C512 113.7 497.7 128 480 128H192C174.3 128 160 113.7 160 96C160 78.33 174.3 64 192 64H480zM480 224C497.7 224 512 238.3 512 256C512 273.7 497.7 288 480 288H192C174.3 288 160 273.7 160 256C160 238.3 174.3 224 192 224H480zM480 384C497.7 384 512 398.3 512 416C512 433.7 497.7 448 480 448H192C174.3 448 160 433.7 160 416C160 398.3 174.3 384 192 384H480zM16 232C16 218.7 26.75 208 40 208H88C101.3 208 112 218.7 112 232V280C112 293.3 101.3 304 88 304H40C26.75 304 16 293.3 16 280V232zM88 368C101.3 368 112 378.7 112 392V440C112 453.3 101.3 464 88 464H40C26.75 464 16 453.3 16 440V392C16 378.7 26.75 368 40 368H88z"/></svg>
                                                        </span>
                                                    </label>
 
                                                    <select class="select form-group-input" placeholder="Choose one">
                                                        @foreach($products as $product)
                                                        <option>{{ $product->product_name }}</option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </div>
                                        </div>

                                        <textarea placeholder="Note on the offer"></textarea>

                                        <div class="space"></div>

                                        <div class="btn-group u-pull-right">
                                            <button class="btn-info">Send Offer</button>
                                        </div>

                                    </div>
                                    <div class="space xlarge"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
