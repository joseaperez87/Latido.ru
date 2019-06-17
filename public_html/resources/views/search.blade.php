<div class="container">
    <h1>{{ __("trans.filter-requests") }}</h1>
    <form id="filter-request" method="post">
        <div class="row">
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="filter-city"><strong>{{ __('trans.city') }}</strong></label>
                    <select name="city" id="city" class="form-control">
                        <option value="1">Moscú</option>
                        <option value="2">Sant Petersburgo</option>
                    </select>
                </div>
            </div>
        </div>
    </form>
</div>