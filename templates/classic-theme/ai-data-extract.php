<?php
// Start of PHP code
overall_header(__('Extract Data'));
?>

<!-- Dashboard Container -->
<div class="dashboard-container">
    <?php include_once TEMPLATE_PATH . '/dashboard_sidebar.php'; ?>

    <!-- Dashboard Content -->
    <div class="dashboard-content-container" data-simplebar>
        <div class="dashboard-content-inner">
            <?php print_adsense_code('header_bottom'); ?>

            <!-- Dashboard Headline -->
            <div class="dashboard-headline">
                <h3 class="d-flex align-items-center">
                    <?php _e('Extract Data') ?>
                </h3>
                <nav id="breadcrumbs" class="dark">
                    <ul>
                        <li><a href="<?php url("INDEX") ?>"><?php _e("Home") ?></a></li>
                        <li><?php _e('Extract Data') ?></li>
                    </ul>
                </nav>
            </div>

            <div class="row">
                <!-- Form for data submission -->
                <div class="col-md-12">
                    <form id="speech_to_text" name="speech_to_text" method="post" action="#">
                        <div class="dashboard-box margin-top-0 margin-bottom-30">
                            <!-- Headline -->
                            <div class="headline">
                                <h3>
                                    <i class="icon-feather-headphones"></i><?php _e('Extract Data') ?>
                                </h3>
                            </div>
                            <div class="content with-padding">
                                <div class="submit-field margin-bottom-20">
                                    <h6><?php _e("Template Title") ?></h6>
                                    <input name="title" type="text" class="with-border small-input quick-text-counter"
                                           data-maxlength="100">
                                </div>
                                <div class="submit-field margin-bottom-20">
                                    <h6><?php _e("Upload Template") ?><span class="form-required">*</span></h6>
                                    <div class="uploadButton margin-top-0">
                                        <input class="uploadButton-input" name="file" type="file" id="upload">
                                        <label class="uploadButton-button ripple-effect" for="upload"><?php _e('Upload Template') ?></label>
                                    </div>
                                    <small><?php _e('.pdf, .jpg, .jpeg, .png allowed.'); ?></small>
                                </div>
                                <button type="submit" name="submit" class="button ripple-effect full-width"><?php _e("Preview") ?>
                                    <i class="icon-feather-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Dynamic Fields -->
                <div class="col-md-12">
                    <div class="dashboard-box margin-top-0 margin-bottom-30">
                        <!-- Headline -->
                        <div class="headline d-flex align-items-center justify-content-between">
                            <h3><i class="fa fa-align-left"></i> <?php _e("Generated Result") ?></h3>
                        </div>
                        <!-- Content -->
                        <div class="content with-padding">
                            <!-- Dynamic Fields Section -->
                            <div class="generated-fields"></div>

                            <!-- Generated Text -->
                            <div class="submit-field margin-bottom-20">
                                <h6><?php _e("Generated Text") ?></h6>
                                <textarea name="generated_text" class="with-border small-input" rows="10" style="width: 100%;" disabled></textarea>
                                <button type="button" class="button ripple-effect" id="regenerate-button">
                                    <?php _e("Regenerate") ?> <i class="icon-feather-refresh-cw"></i>
                                </button>
                                <button type="button" class="button ripple-effect" id="save-publish-button">
                                    <?php _e("Save and Publish") ?> <i class="icon-feather-upload"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <?php print_adsense_code('footer_top'); ?>

                <!-- Footer -->
                <div class="dashboard-footer-spacer"></div>
            </div>
        </div>
    </div>
</div>

<?php ob_start() ?>

<style>
    /* Style adjustments */
    .generated-fields .submit-field {
        display: flex;
        align-items: center;
        gap: 10px; /* Space between elements */
    }

    .generated-fields input[type="checkbox"] {
        width: 20px;
        height: 20px;
        margin: 0;
    }

    .generated-fields h6 {
        margin: 0;
        font-size: 14px;
        width: 100px; /* Consistent label width */
    }

    .generated-fields input[type="text"] {
        flex-grow: 1;
    }

    .generated-fields button {
        margin-left: 10px;
        padding: 5px 10px;
    }
</style>

<script>
    document.getElementById('speech_to_text').addEventListener('submit', function (event) {
        event.preventDefault();

        const data = [
            { id: 1, name: 'Example 1', value: 'Value 1' },
            { id: 2, name: 'Example 2', value: 'Value 2' },
            { id: 3, name: 'Example 3', value: 'Value 3' },
            { id: 4, name: 'Example 4', value: 'Value 4' },
            { id: 5, name: 'Example 5', value: 'Value 5' },
        ];

        const fieldsContainer = document.querySelector('.generated-fields');
        fieldsContainer.innerHTML = '';

        data.forEach(item => {
            const fieldRow = document.createElement('div');
            fieldRow.className = 'submit-field';

            fieldRow.innerHTML = `
                <input type="checkbox">
                <h6>${item.name}</h6>
                <input type="text" class="with-border small-input" value="${item.value}" disabled>
                <button class="button ripple-effect btn-sm edit-button" data-value="${item.value}" title="Edit">
                    <i class="icon-feather-edit"></i>
                </button>
            `;

            fieldsContainer.appendChild(fieldRow);
        });

        // Add edit button functionality
        document.querySelectorAll('.edit-button').forEach(button => {
            button.addEventListener('click', function () {
                const generatedTextArea = document.querySelector('textarea[name="generated_text"]');
                generatedTextArea.value += `${this.getAttribute('data-value')}\n`;
            });
        });
    });
</script>

<?php
$footer_content = ob_get_clean();
include_once TEMPLATE_PATH . '/overall_footer_dashboard.php';
