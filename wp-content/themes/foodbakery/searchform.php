<form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="form-inline">
    <fieldset>
        <div class="input-group">
            <input type="text" name="s" id="search" placeholder="<?php esc_attr_e(esc_html_e('Search', 'foodbakery')); ?>" value="<?php the_search_query(); ?>"
                   class="form-control" />
            <span class="input-group-btn">
				<button type="submit" class="btn btn-default"><i class="icon-search"></i></button>
            </span>
        </div>
    </fieldset>
</form>
