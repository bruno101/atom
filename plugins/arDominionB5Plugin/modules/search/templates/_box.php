<div class="position-relative mb-4" style="min-height: 60px;">
  <form id="search-box" class="d-flex justify-content-center position-absolute start-50 translate-middle-x"
    role="search"
    action="<?php echo url_for(['module' => 'informationobject', 'action' => 'browse']); ?>"
    style="width: 100%; max-width: 700px; padding: 0 1rem; top: -20px;">

    <div class="input-group flex-nowrap w-100">
      <a href="<?php echo url_for(['module' => 'chatbot', 'action' => 'index']); ?>"
        class="btn btn-sm atom-btn-secondary d-flex align-items-center justify-content-center"
        id="search-box-options" role="button" alt="ModestIA"
        data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="d-none d-lg-block" title="ModestIA"
        style="height: 42px; width: 42px;">
        <img src="/plugins/arDominionB5Plugin/images/ai.png" alt="ModestIA" style="width:1.7em; height:1.7em;" />
        <span class="visually-hidden"><?php echo __('Search options'); ?></span>
      </a>

      <input id="search-box-input" class="form-control form-control-sm dropdown-toggle"
        type="search" name="query"
        autocomplete="off" value="<?php echo $sf_request->query; ?>"
        placeholder="<?php echo sfConfig::get('app_ui_label_globalSearch'); ?>"
        data-url="<?php echo url_for(['module' => 'search', 'action' => 'autocomplete']); ?>"
        data-bs-toggle="dropdown" aria-label="<?php echo sfConfig::get('app_ui_label_globalSearch'); ?>"
        aria-expanded="false" style="height: 42px;">

      <ul id="search-box-results" class="dropdown-menu mt-2" aria-labelledby="search-box-input"></ul>

      <button class="btn btn-sm atom-btn-secondary" type="submit" style="height: 42px; min-width: 40px;">
        <i class="fas fa-search" style="color:#fff" aria-hidden="true"></i>
        <span class="visually-hidden"><?php echo __('Search in browse page'); ?></span>
      </button>
    </div>
  </form>
</div>
