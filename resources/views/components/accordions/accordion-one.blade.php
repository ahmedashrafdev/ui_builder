<form action="#" method="post">
    <div class="row">
        <div class="form-group">
            <div class="col-md-6">
                <label class="sr-only">Your name *</label>
                <input type="text" value="" maxlength="100" class="form-control" name="name" id="name" placeholder="Your name *">
            </div>
            <div class="col-md-6">
                <label class="sr-only">Your email address *</label>
                <input type="email" value="" maxlength="100" class="form-control" name="email" id="email" placeholder="Your email address *">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-md-12">
                <label class="sr-only">Comment *</label>
                <textarea maxlength="5000" rows="10" class="form-control" name="comment" id="comment" style="height: 138px;" placeholder="Comment *"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <input type="submit" value="Submit" class="btn btn-theme" data-loading-text="Loading...">
        </div>
    </div>
</form>