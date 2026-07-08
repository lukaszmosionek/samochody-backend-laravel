<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.11.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.11.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-cars">
                                <a href="#endpoints-GETapi-cars">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-cars">
                                <a href="#endpoints-POSTapi-cars">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-cars--id-">
                                <a href="#endpoints-GETapi-cars--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-cars--id-">
                                <a href="#endpoints-PUTapi-cars--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-cars--id-">
                                <a href="#endpoints-DELETEapi-cars--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: July 8, 2026</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-cars">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-cars">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/cars" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/cars"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-cars">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 3,
            &quot;make&quot;: &quot;Toyota&quot;,
            &quot;model&quot;: &quot;Corolla&quot;,
            &quot;year&quot;: 2020,
            &quot;price&quot;: &quot;65000.00&quot;,
            &quot;mileage&quot;: 45000,
            &quot;location&quot;: &quot;Warszawa&quot;,
            &quot;description&quot;: &quot;Świetny samoch&oacute;d do miasta i na trasy.&quot;,
            &quot;status&quot;: &quot;available&quot;,
            &quot;created_at&quot;: &quot;2026-07-08T10:47:45.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-07-08T10:47:45.000000Z&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;make&quot;: &quot;BMW&quot;,
            &quot;model&quot;: &quot;320d&quot;,
            &quot;year&quot;: 2018,
            &quot;price&quot;: &quot;89000.00&quot;,
            &quot;mileage&quot;: 98000,
            &quot;location&quot;: &quot;Krak&oacute;w&quot;,
            &quot;description&quot;: &quot;Dynamiczny sedan z pełnym wyposażeniem.&quot;,
            &quot;status&quot;: &quot;available&quot;,
            &quot;created_at&quot;: &quot;2026-07-08T10:47:45.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-07-08T10:47:45.000000Z&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;make&quot;: &quot;Volkswagen&quot;,
            &quot;model&quot;: &quot;Passat&quot;,
            &quot;year&quot;: 2016,
            &quot;price&quot;: &quot;54000.00&quot;,
            &quot;mileage&quot;: 132000,
            &quot;location&quot;: &quot;Gdańsk&quot;,
            &quot;description&quot;: &quot;Tani i wygodny samoch&oacute;d rodzinny.&quot;,
            &quot;status&quot;: &quot;sold&quot;,
            &quot;created_at&quot;: &quot;2026-07-08T10:47:45.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-07-08T10:47:45.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;make&quot;: &quot;Toyota&quot;,
            &quot;model&quot;: &quot;Corolla&quot;,
            &quot;year&quot;: 2020,
            &quot;price&quot;: &quot;65000.00&quot;,
            &quot;mileage&quot;: 45000,
            &quot;location&quot;: &quot;Warszawa&quot;,
            &quot;description&quot;: &quot;Dobry stan&quot;,
            &quot;status&quot;: &quot;available&quot;,
            &quot;created_at&quot;: &quot;2026-07-08T10:43:53.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-07-08T10:43:53.000000Z&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;make&quot;: &quot;Toyota&quot;,
            &quot;model&quot;: &quot;Corolla&quot;,
            &quot;year&quot;: 2020,
            &quot;price&quot;: &quot;65000.00&quot;,
            &quot;mileage&quot;: 45000,
            &quot;location&quot;: &quot;Warszawa&quot;,
            &quot;description&quot;: &quot;Dobry stan&quot;,
            &quot;status&quot;: &quot;available&quot;,
            &quot;created_at&quot;: &quot;2026-07-08T10:31:59.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-07-08T10:31:59.000000Z&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://localhost/api/cars?page=1&quot;,
        &quot;last&quot;: &quot;http://localhost/api/cars?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;page&quot;: null,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/cars?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;page&quot;: 1,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;page&quot;: null,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://localhost/api/cars&quot;,
        &quot;per_page&quot;: 10,
        &quot;to&quot;: 5,
        &quot;total&quot;: 5
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-cars" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-cars"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cars"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-cars" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cars">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-cars" data-method="GET"
      data-path="api/cars"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-cars', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-cars"
                    onclick="tryItOut('GETapi-cars');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-cars"
                    onclick="cancelTryOut('GETapi-cars');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-cars"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/cars</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-cars"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-cars"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-cars">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-cars">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/cars" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"make\": \"b\",
    \"model\": \"n\",
    \"year\": 7,
    \"price\": 12,
    \"mileage\": 77,
    \"location\": \"i\",
    \"description\": \"Eius et animi quos velit et.\",
    \"status\": \"sold\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/cars"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "make": "b",
    "model": "n",
    "year": 7,
    "price": 12,
    "mileage": 77,
    "location": "i",
    "description": "Eius et animi quos velit et.",
    "status": "sold"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-cars">
</span>
<span id="execution-results-POSTapi-cars" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-cars"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-cars"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-cars" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-cars">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-cars" data-method="POST"
      data-path="api/cars"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-cars', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-cars"
                    onclick="tryItOut('POSTapi-cars');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-cars"
                    onclick="cancelTryOut('POSTapi-cars');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-cars"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/cars</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-cars"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-cars"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>make</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="make"                data-endpoint="POSTapi-cars"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>model</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="model"                data-endpoint="POSTapi-cars"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>n</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>year</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="year"                data-endpoint="POSTapi-cars"
               value="7"
               data-component="body">
    <br>
<p>Must be at least 1886. Must not be greater than 2027. Example: <code>7</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="price"                data-endpoint="POSTapi-cars"
               value="12"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>12</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>mileage</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="mileage"                data-endpoint="POSTapi-cars"
               value="77"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>77</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>location</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="location"                data-endpoint="POSTapi-cars"
               value="i"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>i</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-cars"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>Example: <code>Eius et animi quos velit et.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-cars"
               value="sold"
               data-component="body">
    <br>
<p>Example: <code>sold</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>available</code></li> <li><code>sold</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-cars--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-cars--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/cars/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/cars/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-cars--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;make&quot;: &quot;Toyota&quot;,
        &quot;model&quot;: &quot;Corolla&quot;,
        &quot;year&quot;: 2020,
        &quot;price&quot;: &quot;65000.00&quot;,
        &quot;mileage&quot;: 45000,
        &quot;location&quot;: &quot;Warszawa&quot;,
        &quot;description&quot;: &quot;Dobry stan&quot;,
        &quot;status&quot;: &quot;available&quot;,
        &quot;created_at&quot;: &quot;2026-07-08T10:31:59.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-07-08T10:31:59.000000Z&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-cars--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-cars--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cars--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-cars--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cars--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-cars--id-" data-method="GET"
      data-path="api/cars/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-cars--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-cars--id-"
                    onclick="tryItOut('GETapi-cars--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-cars--id-"
                    onclick="cancelTryOut('GETapi-cars--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-cars--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/cars/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-cars--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-cars--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-cars--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the car. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-cars--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-cars--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/cars/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"make\": \"b\",
    \"model\": \"n\",
    \"year\": 7,
    \"price\": 12,
    \"mileage\": 77,
    \"location\": \"i\",
    \"description\": \"Eius et animi quos velit et.\",
    \"status\": \"sold\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/cars/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "make": "b",
    "model": "n",
    "year": 7,
    "price": 12,
    "mileage": 77,
    "location": "i",
    "description": "Eius et animi quos velit et.",
    "status": "sold"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-cars--id-">
</span>
<span id="execution-results-PUTapi-cars--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-cars--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-cars--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-cars--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-cars--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-cars--id-" data-method="PUT"
      data-path="api/cars/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-cars--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-cars--id-"
                    onclick="tryItOut('PUTapi-cars--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-cars--id-"
                    onclick="cancelTryOut('PUTapi-cars--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-cars--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/cars/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/cars/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-cars--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-cars--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-cars--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the car. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>make</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="make"                data-endpoint="PUTapi-cars--id-"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>model</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="model"                data-endpoint="PUTapi-cars--id-"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>n</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>year</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="year"                data-endpoint="PUTapi-cars--id-"
               value="7"
               data-component="body">
    <br>
<p>Must be at least 1886. Must not be greater than 2027. Example: <code>7</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="price"                data-endpoint="PUTapi-cars--id-"
               value="12"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>12</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>mileage</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="mileage"                data-endpoint="PUTapi-cars--id-"
               value="77"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>77</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>location</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="location"                data-endpoint="PUTapi-cars--id-"
               value="i"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>i</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-cars--id-"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>Example: <code>Eius et animi quos velit et.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-cars--id-"
               value="sold"
               data-component="body">
    <br>
<p>Example: <code>sold</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>available</code></li> <li><code>sold</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-cars--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-cars--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/cars/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/cars/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-cars--id-">
</span>
<span id="execution-results-DELETEapi-cars--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-cars--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-cars--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-cars--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-cars--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-cars--id-" data-method="DELETE"
      data-path="api/cars/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-cars--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-cars--id-"
                    onclick="tryItOut('DELETEapi-cars--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-cars--id-"
                    onclick="cancelTryOut('DELETEapi-cars--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-cars--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/cars/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-cars--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-cars--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-cars--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the car. Example: <code>1</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
