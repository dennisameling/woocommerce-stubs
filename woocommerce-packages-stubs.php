<?php
/**
 * Generated stub declarations for WooCommerce.
 * @see https://woocommerce.com
 * @see https://github.com/php-stubs/woocommerce-stubs
 */

namespace Automattic\WooCommerce\Blocks {
    /**
     * Assets class.
     */
    class Assets
    {
        /**
         * Initialize class features on init.
         */
        public static function init()
        {
        }
        /**
         * Register block scripts & styles.
         */
        public static function register_assets()
        {
        }
        /**
         * Print wcSettings in all pages. This is a temporary fix until we find a better
         * solution to share settings between WooCommerce Admin and WooCommerce Blocks.
         * See https://github.com/woocommerce/woocommerce-gutenberg-products-block/issues/932
         */
        public static function print_shared_settings()
        {
        }
        /**
         * Attach data to registered assets using inline scripts.
         */
        public static function maybe_add_asset_data()
        {
        }
        /**
         * Add body classes.
         *
         * @param array $classes Array of CSS classnames.
         * @return array Modified array of CSS classnames.
         */
        public static function add_theme_body_class($classes = [])
        {
        }
        /**
         * Returns javascript to inject as data for enqueued wc-shared-settings script.
         *
         * @return string;
         * @since 2.4.0
         */
        protected static function get_wc_settings_data()
        {
        }
        /**
         * Returns block-related data for enqueued wc-shared-settings script.
         *
         * This is used to map site settings & data into JS-accessible variables.
         *
         * @since 2.4.0
         */
        protected static function get_wc_block_data()
        {
        }
        /**
         * Get the file modified time as a cache buster if we're in dev mode.
         *
         * @param string $file Local path to the file.
         * @return string The cache buster value to use for the given file.
         */
        protected static function get_file_version($file)
        {
        }
        /**
         * Registers a script according to `wp_register_script`, additionally loading the translations for the file.
         *
         * @since 2.0.0
         *
         * @param string $handle    Name of the script. Should be unique.
         * @param string $src       Full URL of the script, or path of the script relative to the WordPress root directory.
         * @param array  $deps      Optional. An array of registered script handles this script depends on. Default empty array.
         * @param bool   $has_i18n  Optional. Whether to add a script translation call to this file. Default 'true'.
         */
        protected static function register_script($handle, $src, $deps = [], $has_i18n = true)
        {
        }
        /**
         * Queues a block script.
         *
         * @since 2.3.0
         *
         * @param string $name Name of the script used to identify the file inside build folder.
         */
        public static function register_block_script($name)
        {
        }
        /**
         * Registers a style according to `wp_register_style`.
         *
         * @since 2.0.0
         *
         * @param string $handle Name of the stylesheet. Should be unique.
         * @param string $src    Full URL of the stylesheet, or path of the stylesheet relative to the WordPress root directory.
         * @param array  $deps   Optional. An array of registered stylesheet handles this stylesheet depends on. Default empty array.
         * @param string $media  Optional. The media for which this stylesheet has been defined. Default 'all'. Accepts media types like
         *                       'all', 'print' and 'screen', or media queries like '(orientation: portrait)' and '(max-width: 640px)'.
         */
        protected static function register_style($handle, $src, $deps = [], $media = 'all')
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\BlockTypes {
    /**
     * AbstractBlock class.
     */
    abstract class AbstractBlock
    {
        /**
         * Block namespace.
         *
         * @var string
         */
        protected $namespace = 'woocommerce';
        /**
         * Block namespace.
         *
         * @var string
         */
        protected $block_name = '';
        /**
         * Registers the block type with WordPress.
         */
        public function register_block_type()
        {
        }
    }
    /**
     * AbstractDynamicBlock class.
     */
    abstract class AbstractDynamicBlock
    {
        /**
         * Block namespace.
         *
         * @var string
         */
        protected $namespace = 'woocommerce';
        /**
         * Block namespace.
         *
         * @var string
         */
        protected $block_name = '';
        /**
         * Registers the block type with WordPress.
         */
        public function register_block_type()
        {
        }
        /**
         * Include and render a dynamic block.
         *
         * @param array  $attributes Block attributes. Default empty array.
         * @param string $content    Block content. Default empty string.
         * @return string Rendered block type output.
         */
        public abstract function render($attributes = array(), $content = '');
        /**
         * Get block attributes.
         *
         * @return array
         */
        protected function get_attributes()
        {
        }
        /**
         * Get the schema for the alignment property.
         *
         * @return array Property definition for align.
         */
        protected function get_schema_align()
        {
        }
        /**
         * Get the schema for a list of IDs.
         *
         * @return array Property definition for a list of numeric ids.
         */
        protected function get_schema_list_ids()
        {
        }
        /**
         * Get the schema for a boolean value.
         *
         * @param  string $default  The default value.
         * @return array Property definition.
         */
        protected function get_schema_boolean($default = true)
        {
        }
        /**
         * Get the schema for a numeric value.
         *
         * @param  string $default  The default value.
         * @return array Property definition.
         */
        protected function get_schema_number($default)
        {
        }
        /**
         * Get the schema for a string value.
         *
         * @param  string $default  The default value.
         * @return array Property definition.
         */
        protected function get_schema_string($default = '')
        {
        }
    }
    /**
     * AbstractProductGrid class.
     */
    abstract class AbstractProductGrid extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractDynamicBlock
    {
        /**
         * Attributes.
         *
         * @var array
         */
        protected $attributes = array();
        /**
         * InnerBlocks content.
         *
         * @var string
         */
        protected $content = '';
        /**
         * Query args.
         *
         * @var array
         */
        protected $query_args = array();
        /**
         * Get a set of attributes shared across most of the grid blocks.
         *
         * @return array List of block attributes with type and defaults.
         */
        protected function get_attributes()
        {
        }
        /**
         * Include and render the dynamic block.
         *
         * @param array  $attributes Block attributes. Default empty array.
         * @param string $content    Block content. Default empty string.
         * @return string Rendered block type output.
         */
        public function render($attributes = array(), $content = '')
        {
        }
        /**
         * Get the schema for the contentVisibility attribute
         *
         * @return array List of block attributes with type and defaults.
         */
        protected function get_schema_content_visibility()
        {
        }
        /**
         * Get the schema for the orderby attribute.
         *
         * @return array Property definition of `orderby` attribute.
         */
        protected function get_schema_orderby()
        {
        }
        /**
         * Get the block's attributes.
         *
         * @param array $attributes Block attributes. Default empty array.
         * @return array  Block attributes merged with defaults.
         */
        protected function parse_attributes($attributes)
        {
        }
        /**
         * Parse query args.
         *
         * @return array
         */
        protected function parse_query_args()
        {
        }
        /**
         * Parse query args.
         *
         * @param array $query_args Query args.
         */
        protected function set_ordering_query_args(&$query_args)
        {
        }
        /**
         * Set args specific to this block
         *
         * @param array $query_args Query args.
         */
        protected abstract function set_block_query_args(&$query_args);
        /**
         * Set categories query args.
         *
         * @param array $query_args Query args.
         */
        protected function set_categories_query_args(&$query_args)
        {
        }
        /**
         * Set visibility query args.
         *
         * @param array $query_args Query args.
         */
        protected function set_visibility_query_args(&$query_args)
        {
        }
        /**
         * Works out the item limit based on rows and columns, or returns default.
         *
         * @return int
         */
        protected function get_products_limit()
        {
        }
        /**
         * Run the query and return an array of product IDs
         *
         * @return array List of product IDs
         */
        protected function get_products()
        {
        }
        /**
         * Get the list of classes to apply to this block.
         *
         * @return string space-separated list of classes.
         */
        protected function get_container_classes()
        {
        }
        /**
         * Render a single products.
         *
         * @param int $id Product ID.
         * @return string Rendered product output.
         */
        public function render_product($id)
        {
        }
        /**
         * Get the product image.
         *
         * @param \WC_Product $product Product.
         * @return string
         */
        protected function get_image_html($product)
        {
        }
        /**
         * Get the product title.
         *
         * @param \WC_Product $product Product.
         * @return string
         */
        protected function get_title_html($product)
        {
        }
        /**
         * Render the rating icons.
         *
         * @param WC_Product $product Product.
         * @return string Rendered product output.
         */
        protected function get_rating_html($product)
        {
        }
        /**
         * Get the price.
         *
         * @param \WC_Product $product Product.
         * @return string Rendered product output.
         */
        protected function get_price_html($product)
        {
        }
        /**
         * Get the sale badge.
         *
         * @param \WC_Product $product Product.
         * @return string Rendered product output.
         */
        protected function get_sale_badge_html($product)
        {
        }
        /**
         * Get the button.
         *
         * @param \WC_Product $product Product.
         * @return string Rendered product output.
         */
        protected function get_button_html($product)
        {
        }
        /**
         * Get the "add to cart" button.
         *
         * @param \WC_Product $product Product.
         * @return string Rendered product output.
         */
        protected function get_add_to_cart($product)
        {
        }
    }
    /**
     * AllReviews class.
     */
    class AllReviews extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'all-reviews';
        /**
         * Registers the block type with WordPress.
         */
        public function register_block_type()
        {
        }
        /**
         * Append frontend scripts when rendering the Product Categories List block.
         *
         * @param array  $attributes Block attributes. Default empty array.
         * @param string $content    Block content. Default empty string.
         * @return string Rendered block type output.
         */
        public function render($attributes = array(), $content = '')
        {
        }
    }
    /**
     * FeaturedCategory class.
     */
    class FeaturedCategory extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractDynamicBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'featured-category';
        /**
         * Default attribute values, should match what's set in JS `registerBlockType`.
         *
         * @var array
         */
        protected $defaults = array('align' => 'none', 'contentAlign' => 'center', 'dimRatio' => 50, 'focalPoint' => false, 'height' => false, 'mediaId' => 0, 'mediaSrc' => '', 'showDesc' => true);
        /**
         * Render the Featured Category block.
         *
         * @param array  $attributes Block attributes. Default empty array.
         * @param string $content    Block content. Default empty string.
         * @return string Rendered block type output.
         */
        public function render($attributes = array(), $content = '')
        {
        }
        /**
         * Get the styles for the wrapper element (background image, color).
         *
         * @param array    $attributes Block attributes. Default empty array.
         * @param \WP_Term $category Term object.
         * @return string
         */
        public function get_styles($attributes, $category)
        {
        }
        /**
         * Get class names for the block container.
         *
         * @param array $attributes Block attributes. Default empty array.
         * @return string
         */
        public function get_classes($attributes)
        {
        }
        /**
         * Returns the main product image URL.
         *
         * @param \WP_Term $category Term object.
         * @param string   $size    Image size, defaults to 'full'.
         * @return string
         */
        public function get_image($category, $size = 'full')
        {
        }
    }
    /**
     * FeaturedProduct class.
     */
    class FeaturedProduct extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractDynamicBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'featured-product';
        /**
         * Default attribute values, should match what's set in JS `registerBlockType`.
         *
         * @var array
         */
        protected $defaults = array('align' => 'none', 'contentAlign' => 'center', 'dimRatio' => 50, 'focalPoint' => false, 'height' => false, 'mediaId' => 0, 'mediaSrc' => '', 'showDesc' => true, 'showPrice' => true);
        /**
         * Render the Featured Product block.
         *
         * @param array  $attributes Block attributes. Default empty array.
         * @param string $content    Block content. Default empty string.
         * @return string Rendered block type output.
         */
        public function render($attributes = array(), $content = '')
        {
        }
        /**
         * Get the styles for the wrapper element (background image, color).
         *
         * @param array       $attributes Block attributes. Default empty array.
         * @param \WC_Product $product Product object.
         * @return string
         */
        public function get_styles($attributes, $product)
        {
        }
        /**
         * Get class names for the block container.
         *
         * @param array $attributes Block attributes. Default empty array.
         * @return string
         */
        public function get_classes($attributes)
        {
        }
        /**
         * Returns the main product image URL.
         *
         * @param \WC_Product $product Product object.
         * @param string      $size    Image size, defaults to 'full'.
         * @return string
         */
        public function get_image($product, $size = 'full')
        {
        }
    }
    /**
     * HandpickedProducts class.
     */
    class HandpickedProducts extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractProductGrid
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'handpicked-products';
        /**
         * Set args specific to this block
         *
         * @param array $query_args Query args.
         */
        protected function set_block_query_args(&$query_args)
        {
        }
        /**
         * Set visibility query args. Handpicked products will show hidden products if chosen.
         *
         * @param array $query_args Query args.
         */
        protected function set_visibility_query_args(&$query_args)
        {
        }
        /**
         * Get block attributes.
         *
         * @return array
         */
        protected function get_attributes()
        {
        }
    }
    /**
     * ProductBestSellers class.
     */
    class ProductBestSellers extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractProductGrid
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-best-sellers';
        /**
         * Set args specific to this block
         *
         * @param array $query_args Query args.
         */
        protected function set_block_query_args(&$query_args)
        {
        }
    }
    /**
     * ProductCategories class.
     */
    class ProductCategories extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-categories';
        /**
         * Registers the block type with WordPress.
         */
        public function register_block_type()
        {
        }
        /**
         * Append frontend scripts when rendering the Product Categories List block.
         *
         * @param array  $attributes Block attributes. Default empty array.
         * @param string $content    Block content. Default empty string.
         * @return string Rendered block type output.
         */
        public function render($attributes = array(), $content = '')
        {
        }
    }
    /**
     * ProductCategory class.
     */
    class ProductCategory extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractProductGrid
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-category';
        /**
         * Set args specific to this block
         *
         * @param array $query_args Query args.
         */
        protected function set_block_query_args(&$query_args)
        {
        }
        /**
         * Get block attributes.
         *
         * @return array
         */
        protected function get_attributes()
        {
        }
    }
    /**
     * ProductNew class.
     */
    class ProductNew extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractProductGrid
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-new';
        /**
         * Set args specific to this block
         *
         * @param array $query_args Query args.
         */
        protected function set_block_query_args(&$query_args)
        {
        }
    }
    /**
     * ProductOnSale class.
     */
    class ProductOnSale extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractProductGrid
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-on-sale';
        /**
         * Set args specific to this block
         *
         * @param array $query_args Query args.
         */
        protected function set_block_query_args(&$query_args)
        {
        }
        /**
         * Get block attributes.
         *
         * @return array
         */
        protected function get_attributes()
        {
        }
    }
    /**
     * ProductSearch class.
     */
    class ProductSearch extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-search';
    }
    /**
     * ProductTag class.
     */
    class ProductTag extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractProductGrid
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-tag';
        /**
         * Set args specific to this block.
         *
         * @param array $query_args Query args.
         */
        protected function set_block_query_args(&$query_args)
        {
        }
        /**
         * Get block attributes.
         *
         * @return array
         */
        protected function get_attributes()
        {
        }
    }
    /**
     * ProductTopRated class.
     */
    class ProductTopRated extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractProductGrid
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-top-rated';
        /**
         * Force orderby to rating.
         *
         * @param array $query_args Query args.
         */
        protected function set_block_query_args(&$query_args)
        {
        }
    }
    /**
     * ProductsByAttribute class.
     */
    class ProductsByAttribute extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractProductGrid
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'products-by-attribute';
        /**
         * Set args specific to this block
         *
         * @param array $query_args Query args.
         */
        protected function set_block_query_args(&$query_args)
        {
        }
        /**
         * Get block attributes.
         *
         * @return array
         */
        protected function get_attributes()
        {
        }
    }
    /**
     * ReviewsByCategory class.
     */
    class ReviewsByCategory extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'reviews-by-category';
        /**
         * Registers the block type with WordPress.
         */
        public function register_block_type()
        {
        }
        /**
         * Append frontend scripts when rendering the Product Categories List block.
         *
         * @param array  $attributes Block attributes. Default empty array.
         * @param string $content    Block content. Default empty string.
         * @return string Rendered block type output.
         */
        public function render($attributes = array(), $content = '')
        {
        }
    }
    /**
     * ReviewsByProduct class.
     */
    class ReviewsByProduct extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'reviews-by-product';
        /**
         * Registers the block type with WordPress.
         */
        public function register_block_type()
        {
        }
        /**
         * Append frontend scripts when rendering the Product Categories List block.
         *
         * @param array  $attributes Block attributes. Default empty array.
         * @param string $content    Block content. Default empty string.
         * @return string Rendered block type output.
         */
        public function render($attributes = array(), $content = '')
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks {
    /**
     * Library class.
     */
    class Library
    {
        /**
         * Initialize block library features.
         */
        public static function init()
        {
        }
        /**
         * Register blocks, hooking up assets and render functions as needed.
         */
        public static function register_blocks()
        {
        }
    }
    /**
     * Main package class.
     */
    class Package
    {
        /**
         * Version.
         *
         * @var string
         */
        const VERSION = '2.4.5';
        /**
         * Stores if init has ran yet.
         *
         * @var boolean
         */
        protected static $did_init = false;
        /**
         * Init the package - load the blocks library and define constants.
         */
        public static function init()
        {
        }
        /**
         * Return the version of the package.
         *
         * @return string
         */
        public static function get_version()
        {
        }
        /**
         * Return the path to the package.
         *
         * @return string
         */
        public static function get_path()
        {
        }
        /**
         * Check dependencies exist.
         *
         * @return boolean
         */
        protected static function has_dependencies()
        {
        }
        /**
         * See if files have been built or not.
         *
         * @return bool
         */
        protected static function is_built()
        {
        }
        /**
         * Add a notice stating that the build has not been done yet.
         */
        protected static function add_build_notice()
        {
        }
        /**
         * Remove core blocks (for 3.6 and below).
         */
        protected static function remove_core_blocks()
        {
        }
    }
    /**
     * RestApi class.
     */
    class RestApi
    {
        /**
         * Initialize class features.
         */
        public static function init()
        {
        }
        /**
         * Register REST API routes.
         */
        public static function register_rest_routes()
        {
        }
        /**
         * Return a list of controller classes for this REST API namespace.
         *
         * @return array
         */
        protected static function get_controllers()
        {
        }
    }
}
namespace {
    /**
     * Abstract Rest Controller Class
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends  WP_REST_Controller
     * @version  2.6.0
     */
    abstract class WC_REST_Controller extends \WP_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = '';
        /**
         * Add the schema from additional fields to an schema array.
         *
         * The type of object is inferred from the passed schema.
         *
         * @param array $schema Schema array.
         *
         * @return array
         */
        protected function add_additional_fields_schema($schema)
        {
        }
        /**
         * Get normalized rest base.
         *
         * @return string
         */
        protected function get_normalized_rest_base()
        {
        }
        /**
         * Check batch limit.
         *
         * @param array $items Request items.
         * @return bool|WP_Error
         */
        protected function check_batch_limit($items)
        {
        }
        /**
         * Bulk create, update and delete items.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return array Of WP_Error or WP_REST_Response.
         */
        public function batch_items($request)
        {
        }
        /**
         * Validate a text value for a text based setting.
         *
         * @since 3.0.0
         * @param string $value Value.
         * @param array  $setting Setting.
         * @return string
         */
        public function validate_setting_text_field($value, $setting)
        {
        }
        /**
         * Validate select based settings.
         *
         * @since 3.0.0
         * @param string $value Value.
         * @param array  $setting Setting.
         * @return string|WP_Error
         */
        public function validate_setting_select_field($value, $setting)
        {
        }
        /**
         * Validate multiselect based settings.
         *
         * @since 3.0.0
         * @param array $values Values.
         * @param array $setting Setting.
         * @return array|WP_Error
         */
        public function validate_setting_multiselect_field($values, $setting)
        {
        }
        /**
         * Validate image_width based settings.
         *
         * @since 3.0.0
         * @param array $values Values.
         * @param array $setting Setting.
         * @return string|WP_Error
         */
        public function validate_setting_image_width_field($values, $setting)
        {
        }
        /**
         * Validate radio based settings.
         *
         * @since 3.0.0
         * @param string $value Value.
         * @param array  $setting Setting.
         * @return string|WP_Error
         */
        public function validate_setting_radio_field($value, $setting)
        {
        }
        /**
         * Validate checkbox based settings.
         *
         * @since 3.0.0
         * @param string $value Value.
         * @param array  $setting Setting.
         * @return string|WP_Error
         */
        public function validate_setting_checkbox_field($value, $setting)
        {
        }
        /**
         * Validate textarea based settings.
         *
         * @since 3.0.0
         * @param string $value Value.
         * @param array  $setting Setting.
         * @return string
         */
        public function validate_setting_textarea_field($value, $setting)
        {
        }
        /**
         * Add meta query.
         *
         * @since 3.0.0
         * @param array $args       Query args.
         * @param array $meta_query Meta query.
         * @return array
         */
        protected function add_meta_query($args, $meta_query)
        {
        }
        /**
         * Get the batch schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_public_batch_schema()
        {
        }
        /**
         * Gets an array of fields to be included on the response.
         * Included fields are based on item schema and `_fields=` request argument.
         * Introduced to support WordPress 4.9.6 changes.
         *
         * @since 3.5.0
         * @param WP_REST_Request $request Full details about the request.
         * @return array Fields to be included in the response.
         */
        public function get_fields_for_response($request)
        {
        }
    }
    /**
     * Terms controller class.
     */
    abstract class WC_REST_Terms_Controller extends \WC_REST_Controller
    {
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = '';
        /**
         * Taxonomy.
         *
         * @var string
         */
        protected $taxonomy = '';
        /**
         * Register the routes for terms.
         */
        public function register_routes()
        {
        }
        /**
         * Check if a given request has access to read the terms.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to create a term.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a term.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to update a term.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to delete a term.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access batch create, update and delete items.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return boolean|WP_Error
         */
        public function batch_items_permissions_check($request)
        {
        }
        /**
         * Check permissions.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @param string          $context Request context.
         * @return bool|WP_Error
         */
        protected function check_permissions($request, $context = 'read')
        {
        }
        /**
         * Get terms associated with a taxonomy.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Create a single term for a taxonomy.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function create_item($request)
        {
        }
        /**
         * Get a single term from a taxonomy.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function get_item($request)
        {
        }
        /**
         * Update a single term from a taxonomy.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function update_item($request)
        {
        }
        /**
         * Delete a single term from a taxonomy.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param object          $term   Term object.
         * @param WP_REST_Request $request Full details about the request.
         * @return array Links for the given term.
         */
        protected function prepare_links($term, $request)
        {
        }
        /**
         * Update term meta fields.
         *
         * @param WP_Term         $term    Term object.
         * @param WP_REST_Request $request Full details about the request.
         * @return bool|WP_Error
         */
        protected function update_term_meta_fields($term, $request)
        {
        }
        /**
         * Get the terms attached to a product.
         *
         * This is an alternative to `get_terms()` that uses `get_the_terms()`
         * instead, which hits the object cache. There are a few things not
         * supported, notably `include`, `exclude`. In `self::get_items()` these
         * are instead treated as a full query.
         *
         * @param array           $prepared_args Arguments for `get_terms()`.
         * @param WP_REST_Request $request       Full details about the request.
         * @return array List of term objects. (Total count in `$this->total_terms`).
         */
        protected function get_terms_for_product($prepared_args, $request)
        {
        }
        /**
         * Comparison function for sorting terms by a column.
         *
         * Uses `$this->sort_column` to determine field to sort by.
         *
         * @param stdClass $left Term object.
         * @param stdClass $right Term object.
         * @return int <0 if left is higher "priority" than right, 0 if equal, >0 if right is higher "priority" than left.
         */
        protected function compare_terms($left, $right)
        {
        }
        /**
         * Get the query params for collections
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get taxonomy.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return int|WP_Error
         */
        protected function get_taxonomy($request)
        {
        }
    }
    /**
     * REST API Product Attribute Terms controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Terms_Controller
     */
    class WC_REST_Product_Attribute_Terms_V1_Controller extends \WC_REST_Terms_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/attributes/(?P<attribute_id>[\\d]+)/terms';
        /**
         * Register the routes for terms.
         */
        public function register_routes()
        {
        }
        /**
         * Prepare a single product attribute term output for response.
         *
         * @param WP_Term $item Term object.
         * @param WP_REST_Request $request
         * @return WP_REST_Response $response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Update term meta fields.
         *
         * @param WP_Term $term
         * @param WP_REST_Request $request
         * @return bool|WP_Error
         */
        protected function update_term_meta_fields($term, $request)
        {
        }
        /**
         * Get the Attribute Term's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Product Attribute Terms controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Attribute_Terms_V1_Controller
     */
    class WC_REST_Product_Attribute_Terms_V2_Controller extends \WC_REST_Product_Attribute_Terms_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
    }
    /**
     * REST API Product Attribute Terms controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Attribute_Terms_V2_Controller
     */
    class WC_REST_Product_Attribute_Terms_Controller extends \WC_REST_Product_Attribute_Terms_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
}
namespace Automattic\WooCommerce\Blocks\RestApi\Controllers {
    /**
     * REST API Product Attribute Terms controller class.
     */
    class ProductAttributeTerms extends \WC_REST_Product_Attribute_Terms_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/blocks';
        /**
         * Register the routes for products.
         */
        public function register_routes()
        {
        }
        /**
         * Check permissions.
         *
         * @param \WP_REST_Request $request Full details about the request.
         * @param string           $context Request context.
         * @return bool|\WP_Error
         */
        protected function check_permissions($request, $context = 'read')
        {
        }
        /**
         * Prepare a single product category output for response.
         *
         * @param \WP_Term         $item    Term object.
         * @param \WP_REST_Request $request Request instance.
         * @return \WP_REST_Response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get the Product's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
}
namespace {
    /**
     * REST API Product Attributes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Product_Attributes_V1_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/attributes';
        /**
         * Attribute name.
         *
         * @var string
         */
        protected $attribute = '';
        /**
         * Register the routes for product attributes.
         */
        public function register_routes()
        {
        }
        /**
         * Check if a given request has access to read the attributes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to create a attribute.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a attribute.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to update a attribute.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to delete a attribute.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access batch create, update and delete items.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function batch_items_permissions_check($request)
        {
        }
        /**
         * Get all attributes.
         *
         * @param WP_REST_Request $request
         * @return array
         */
        public function get_items($request)
        {
        }
        /**
         * Create a single attribute.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function create_item($request)
        {
        }
        /**
         * Get a single attribute.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function get_item($request)
        {
        }
        /**
         * Update a single term from a taxonomy.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function update_item($request)
        {
        }
        /**
         * Delete a single attribute.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare a single product attribute output for response.
         *
         * @param obj $item Term object.
         * @param WP_REST_Request $request
         * @return WP_REST_Response $response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param object $attribute Attribute object.
         * @return array Links for the given attribute.
         */
        protected function prepare_links($attribute)
        {
        }
        /**
         * Get the Attribute's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get attribute name.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return string
         */
        protected function get_taxonomy($request)
        {
        }
        /**
         * Get attribute data.
         *
         * @param int $id Attribute ID.
         * @return stdClass|WP_Error
         */
        protected function get_attribute($id)
        {
        }
        /**
         * Validate attribute slug.
         *
         * @deprecated 3.2.0
         * @param string $slug
         * @param bool $new_data
         * @return bool|WP_Error
         */
        protected function validate_attribute_slug($slug, $new_data = \true)
        {
        }
        /**
         * Schedule to flush rewrite rules.
         *
         * @deprecated 3.2.0
         * @since 3.0.0
         */
        protected function flush_rewrite_rules()
        {
        }
    }
    /**
     * REST API Product Attributes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Attributes_V1_Controller
     */
    class WC_REST_Product_Attributes_V2_Controller extends \WC_REST_Product_Attributes_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
    }
    /**
     * REST API Product Attributes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Attributes_V2_Controller
     */
    class WC_REST_Product_Attributes_Controller extends \WC_REST_Product_Attributes_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
}
namespace Automattic\WooCommerce\Blocks\RestApi\Controllers {
    /**
     * REST API Product Attributes controller class.
     */
    class ProductAttributes extends \WC_REST_Product_Attributes_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/blocks';
        /**
         * Register the routes for products.
         */
        public function register_routes()
        {
        }
        /**
         * Check if a given request has access to read the attributes.
         *
         * @param  \WP_REST_Request $request Full details about the request.
         * @return \WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a attribute.
         *
         * @param  \WP_REST_Request $request Full details about the request.
         * @return \WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check permissions.
         *
         * @param \WP_REST_Request $request Full details about the request.
         * @param string           $context Request context.
         * @return bool|\WP_Error
         */
        protected function check_permissions($request, $context = 'read')
        {
        }
        /**
         * Prepare a single product category output for response.
         *
         * @param \WP_Term         $item    Term object.
         * @param \WP_REST_Request $request Request instance.
         * @return \WP_REST_Response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get the Product's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
}
namespace {
    /**
     * REST API Product Categories controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Terms_Controller
     */
    class WC_REST_Product_Categories_V1_Controller extends \WC_REST_Terms_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/categories';
        /**
         * Taxonomy.
         *
         * @var string
         */
        protected $taxonomy = 'product_cat';
        /**
         * Prepare a single product category output for response.
         *
         * @param WP_Term         $item    Term object.
         * @param WP_REST_Request $request Request instance.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Update term meta fields.
         *
         * @param WP_Term         $term    Term object.
         * @param WP_REST_Request $request Request instance.
         * @return bool|WP_Error
         */
        protected function update_term_meta_fields($term, $request)
        {
        }
        /**
         * Get the Category schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Product Categories controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Categories_V1_Controller
     */
    class WC_REST_Product_Categories_V2_Controller extends \WC_REST_Product_Categories_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Prepare a single product category output for response.
         *
         * @param WP_Term         $item    Term object.
         * @param WP_REST_Request $request Request instance.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get the Category schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Product Categories controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Categories_V2_Controller
     */
    class WC_REST_Product_Categories_Controller extends \WC_REST_Product_Categories_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Prepare a single product category output for response.
         *
         * @param WP_Term         $item    Term object.
         * @param WP_REST_Request $request Request instance.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get the Category schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Update term meta fields.
         *
         * @param WP_Term         $term    Term object.
         * @param WP_REST_Request $request Request instance.
         * @return bool|WP_Error
         *
         * @since 3.5.5
         */
        protected function update_term_meta_fields($term, $request)
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\RestApi\Controllers {
    /**
     * REST API Product Categories controller class.
     */
    class ProductCategories extends \WC_REST_Product_Categories_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/blocks';
        /**
         * Register the routes for products.
         */
        public function register_routes()
        {
        }
        /**
         * Check permissions.
         *
         * @param \WP_REST_Request $request Full details about the request.
         * @param string           $context Request context.
         * @return bool|\WP_Error
         */
        protected function check_permissions($request, $context = 'read')
        {
        }
        /**
         * Prepare a single product category output for response.
         *
         * @param \WP_Term         $item    Term object.
         * @param \WP_REST_Request $request Request instance.
         * @return \WP_REST_Response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get the Product's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Product Reviews controller class.
     */
    class ProductReviews extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/blocks';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/reviews';
        /**
         * Register the routes for product reviews.
         */
        public function register_routes()
        {
        }
        /**
         * Check if a given request has access to read the attributes.
         *
         * @param  \WP_REST_Request $request Full details about the request.
         * @return \WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Get all reviews.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepends internal property prefix to query parameters to match our response fields.
         *
         * @param string $query_param Query parameter.
         * @return string
         */
        protected function normalize_query_param($query_param)
        {
        }
        /**
         * Prepare a single product review output for response.
         *
         * @param \WP_Comment      $review Product review object.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($review, $request)
        {
        }
        /**
         * Get the Product Review's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
}
namespace {
    /**
     * REST API Product Tags controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Terms_Controller
     */
    class WC_REST_Product_Tags_V1_Controller extends \WC_REST_Terms_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/tags';
        /**
         * Taxonomy.
         *
         * @var string
         */
        protected $taxonomy = 'product_tag';
        /**
         * Prepare a single product tag output for response.
         *
         * @param obj $item Term object.
         * @param WP_REST_Request $request
         * @return WP_REST_Response $response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get the Tag's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Product Tags controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Tags_V1_Controller
     */
    class WC_REST_Product_Tags_V2_Controller extends \WC_REST_Product_Tags_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
    }
    /**
     * REST API Product Tags controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Tags_V2_Controller
     */
    class WC_REST_Product_Tags_Controller extends \WC_REST_Product_Tags_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
}
namespace Automattic\WooCommerce\Blocks\RestApi\Controllers {
    /**
     * REST API Product Tags controller class.
     */
    class ProductTags extends \WC_REST_Product_Tags_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/blocks';
        /**
         * Register the routes for products.
         */
        public function register_routes()
        {
        }
        /**
         * Check permissions.
         *
         * @param \WP_REST_Request $request Full details about the request.
         * @param string           $context Request context.
         * @return bool|\WP_Error
         */
        protected function check_permissions($request, $context = 'read')
        {
        }
    }
}
namespace {
    /**
     * WC_REST_Posts_Controller
     *
     * @package Automattic/WooCommerce/RestApi
     * @version  2.6.0
     */
    abstract class WC_REST_Posts_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = '';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = '';
        /**
         * Controls visibility on frontend.
         *
         * @var string
         */
        protected $public = \false;
        /**
         * Check if a given request has access to read items.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to create an item.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read an item.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to update an item.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to delete an item.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return bool|WP_Error
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access batch create, update and delete items.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return boolean|WP_Error
         */
        public function batch_items_permissions_check($request)
        {
        }
        /**
         * Get a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Create a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Add post meta fields.
         *
         * @param WP_Post         $post Post Object.
         * @param WP_REST_Request $request WP_REST_Request Object.
         * @return bool|WP_Error
         */
        protected function add_post_meta_fields($post, $request)
        {
        }
        /**
         * Delete post.
         *
         * @param WP_Post $post Post object.
         */
        protected function delete_post($post)
        {
        }
        /**
         * Update a single post.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Get a collection of posts.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Delete a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WP_Post         $post Post object.
         * @param WP_REST_Request $request Request object.
         * @return array Links for the given post.
         */
        protected function prepare_links($post, $request)
        {
        }
        /**
         * Determine the allowed query_vars for a get_items() response and
         * prepare for WP_Query.
         *
         * @param array           $prepared_args Prepared arguments.
         * @param WP_REST_Request $request Request object.
         * @return array          $query_args
         */
        protected function prepare_items_query($prepared_args = array(), $request = \null)
        {
        }
        /**
         * Get all the WP Query vars that are allowed for the API request.
         *
         * @return array
         */
        protected function get_allowed_query_vars()
        {
        }
        /**
         * Get the query params for collections of attachments.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Update post meta fields.
         *
         * @param WP_Post         $post Post object.
         * @param WP_REST_Request $request Request object.
         * @return bool|WP_Error
         */
        protected function update_post_meta_fields($post, $request)
        {
        }
    }
    /**
     * WC_REST_CRUD_Controller class.
     *
     * @extends WC_REST_Posts_Controller
     */
    abstract class WC_REST_CRUD_Controller extends \WC_REST_Posts_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * If object is hierarchical.
         *
         * @var bool
         */
        protected $hierarchical = \false;
        /**
         * Get object.
         *
         * @param  int $id Object ID.
         * @return object WC_Data object or WP_Error object.
         */
        protected function get_object($id)
        {
        }
        /**
         * Check if a given request has access to read an item.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to update an item.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to delete an item.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return bool|WP_Error
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Get object permalink.
         *
         * @param  object $object Object.
         * @return string
         */
        protected function get_permalink($object)
        {
        }
        /**
         * Prepares the object for the REST response.
         *
         * @since  3.0.0
         * @param  WC_Data         $object  Object data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_Error|WP_REST_Response Response object on success, or WP_Error object on failure.
         */
        protected function prepare_object_for_response($object, $request)
        {
        }
        /**
         * Prepares one object for create or update operation.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Request object.
         * @param  bool            $creating If is creating a new object.
         * @return WP_Error|WC_Data The prepared item, or WP_Error object on failure.
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
        /**
         * Get a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Save an object data.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request  Full details about the request.
         * @param  bool            $creating If is creating a new object.
         * @return WC_Data|WP_Error
         */
        protected function save_object($request, $creating = \false)
        {
        }
        /**
         * Create a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Update a single post.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Prepare objects query.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Full details about the request.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Get objects.
         *
         * @since  3.0.0
         * @param  array $query_args Query args.
         * @return array
         */
        protected function get_objects($query_args)
        {
        }
        /**
         * Get a collection of posts.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Delete a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Data         $object  Object data.
         * @param WP_REST_Request $request Request object.
         * @return array                   Links for the given post.
         */
        protected function prepare_links($object, $request)
        {
        }
        /**
         * Get the query params for collections of attachments.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Products controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_CRUD_Controller
     */
    class WC_REST_Products_V2_Controller extends \WC_REST_CRUD_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'product';
        /**
         * If object is hierarchical.
         *
         * @var bool
         */
        protected $hierarchical = \true;
        /**
         * Initialize product actions.
         */
        public function __construct()
        {
        }
        /**
         * Register the routes for products.
         */
        public function register_routes()
        {
        }
        /**
         * Get object.
         *
         * @param int $id Object ID.
         *
         * @since  3.0.0
         * @return WC_Data
         */
        protected function get_object($id)
        {
        }
        /**
         * Prepare a single product output for response.
         *
         * @param WC_Data         $object  Object data.
         * @param WP_REST_Request $request Request object.
         *
         * @since  3.0.0
         * @return WP_REST_Response
         */
        public function prepare_object_for_response($object, $request)
        {
        }
        /**
         * Prepare objects query.
         *
         * @param WP_REST_Request $request Full details about the request.
         *
         * @since  3.0.0
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Get the downloads for a product or product variation.
         *
         * @param WC_Product|WC_Product_Variation $product Product instance.
         *
         * @return array
         */
        protected function get_downloads($product)
        {
        }
        /**
         * Get taxonomy terms.
         *
         * @param WC_Product $product  Product instance.
         * @param string     $taxonomy Taxonomy slug.
         *
         * @return array
         */
        protected function get_taxonomy_terms($product, $taxonomy = 'cat')
        {
        }
        /**
         * Get the images for a product or product variation.
         *
         * @param WC_Product|WC_Product_Variation $product Product instance.
         *
         * @return array
         */
        protected function get_images($product)
        {
        }
        /**
         * Get attribute taxonomy label.
         *
         * @param string $name Taxonomy name.
         *
         * @deprecated 3.0.0
         * @return     string
         */
        protected function get_attribute_taxonomy_label($name)
        {
        }
        /**
         * Get product attribute taxonomy name.
         *
         * @param string     $slug    Taxonomy name.
         * @param WC_Product $product Product data.
         *
         * @since  3.0.0
         * @return string
         */
        protected function get_attribute_taxonomy_name($slug, $product)
        {
        }
        /**
         * Get default attributes.
         *
         * @param WC_Product $product Product instance.
         *
         * @return array
         */
        protected function get_default_attributes($product)
        {
        }
        /**
         * Get attribute options.
         *
         * @param int   $product_id Product ID.
         * @param array $attribute  Attribute data.
         *
         * @return array
         */
        protected function get_attribute_options($product_id, $attribute)
        {
        }
        /**
         * Get the attributes for a product or product variation.
         *
         * @param WC_Product|WC_Product_Variation $product Product instance.
         *
         * @return array
         */
        protected function get_attributes($product)
        {
        }
        /**
         * Get product data.
         *
         * @param WC_Product $product Product instance.
         * @param string     $context Request context.
         *                            Options: 'view' and 'edit'.
         *
         * @return array
         */
        protected function get_product_data($product, $context = 'view')
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Data         $object  Object data.
         * @param WP_REST_Request $request Request object.
         *
         * @return array                   Links for the given post.
         */
        protected function prepare_links($object, $request)
        {
        }
        /**
         * Prepare a single product for create or update.
         *
         * @param WP_REST_Request $request Request object.
         * @param bool            $creating If is creating a new object.
         *
         * @return WP_Error|WC_Data
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
        /**
         * Set product images.
         *
         * @param WC_Product $product Product instance.
         * @param array      $images  Images data.
         *
         * @throws WC_REST_Exception REST API exceptions.
         * @return WC_Product
         */
        protected function set_product_images($product, $images)
        {
        }
        /**
         * Save product shipping data.
         *
         * @param WC_Product $product Product instance.
         * @param array      $data    Shipping data.
         *
         * @return WC_Product
         */
        protected function save_product_shipping_data($product, $data)
        {
        }
        /**
         * Save downloadable files.
         *
         * @param WC_Product $product    Product instance.
         * @param array      $downloads  Downloads data.
         * @param int        $deprecated Deprecated since 3.0.
         *
         * @return WC_Product
         */
        protected function save_downloadable_files($product, $downloads, $deprecated = 0)
        {
        }
        /**
         * Save taxonomy terms.
         *
         * @param WC_Product $product  Product instance.
         * @param array      $terms    Terms data.
         * @param string     $taxonomy Taxonomy name.
         *
         * @return WC_Product
         */
        protected function save_taxonomy_terms($product, $terms, $taxonomy = 'cat')
        {
        }
        /**
         * Save default attributes.
         *
         * @param WC_Product      $product Product instance.
         * @param WP_REST_Request $request Request data.
         *
         * @since  3.0.0
         * @return WC_Product
         */
        protected function save_default_attributes($product, $request)
        {
        }
        /**
         * Clear caches here so in sync with any new variations/children.
         *
         * @param WC_Data $object Object data.
         */
        public function clear_transients($object)
        {
        }
        /**
         * Delete a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         *
         * @return WP_REST_Response|WP_Error
         */
        public function delete_item($request)
        {
        }
        /**
         * Get the Product's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections of attachments.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Products controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Products_V2_Controller
     */
    class WC_REST_Products_Controller extends \WC_REST_Products_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Get the images for a product or product variation.
         *
         * @param WC_Product|WC_Product_Variation $product Product instance.
         * @return array
         */
        protected function get_images($product)
        {
        }
        /**
         * Make extra product orderby features supported by WooCommerce available to the WC API.
         * This includes 'price', 'popularity', and 'rating'.
         *
         * @param WP_REST_Request $request Request data.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Set product images.
         *
         * @throws WC_REST_Exception REST API exceptions.
         * @param WC_Product $product Product instance.
         * @param array      $images  Images data.
         * @return WC_Product
         */
        protected function set_product_images($product, $images)
        {
        }
        /**
         * Prepare a single product for create or update.
         *
         * @param  WP_REST_Request $request Request object.
         * @param  bool            $creating If is creating a new object.
         * @return WP_Error|WC_Data
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
        /**
         * Get the Product's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Add new options for 'orderby' to the collection params.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get product data.
         *
         * @param WC_Product $product Product instance.
         * @param string     $context Request context.
         *                            Options: 'view' and 'edit'.
         * @return array
         */
        protected function get_product_data($product, $context = 'view')
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\RestApi\Controllers {
    /**
     * REST API Products controller class.
     */
    class Products extends \WC_REST_Products_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/blocks';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products';
        /**
         * Register the routes for products.
         */
        public function register_routes()
        {
        }
        /**
         * Check if a given request has access to read items.
         *
         * @param  \WP_REST_Request $request Full details about the request.
         * @return \WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read an item.
         *
         * @param  \WP_REST_Request $request Full details about the request.
         * @return \WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Change REST API permissions so that authors have access to this API.
         *
         * This code only runs for methods of this class. @see Products::get_items below.
         *
         * @param bool $permission Does the current user have access to the API.
         * @return bool
         */
        public function force_edit_posts_permission($permission)
        {
        }
        /**
         * Get a collection of posts.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Make extra product orderby features supported by WooCommerce available to the WC API.
         * This includes 'price', 'popularity', and 'rating'.
         *
         * @param WP_REST_Request $request Request data.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Get product data.
         *
         * @param \WC_Product|\WC_Product_Variation $product Product instance.
         * @param string                            $context Request context. Options: 'view' and 'edit'.
         * @return array
         */
        protected function get_product_data($product, $context = 'view')
        {
        }
        /**
         * Get the images for a product or product variation.
         *
         * @param \WC_Product|\WC_Product_Variation $product Product instance.
         * @return array
         */
        protected function get_images($product)
        {
        }
        /**
         * Update the collection params.
         *
         * Adds new options for 'orderby', and new parameters 'category_operator', 'attribute_operator'.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get the Product's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
}
namespace {
    /**
     * REST API variations controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Products_V2_Controller
     */
    class WC_REST_Product_Variations_V2_Controller extends \WC_REST_Products_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/(?P<product_id>[\\d]+)/variations';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'product_variation';
        /**
         * Register the routes for products.
         */
        public function register_routes()
        {
        }
        /**
         * Get object.
         *
         * @since  3.0.0
         * @param  int $id Object ID.
         * @return WC_Data
         */
        protected function get_object($id)
        {
        }
        /**
         * Check if a given request has access to update an item.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Prepare a single variation output for response.
         *
         * @since  3.0.0
         * @param  WC_Data         $object  Object data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_object_for_response($object, $request)
        {
        }
        /**
         * Prepare objects query.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Full details about the request.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Prepare a single variation for create or update.
         *
         * @param  WP_REST_Request $request Request object.
         * @param  bool            $creating If is creating a new object.
         * @return WP_Error|WC_Data
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
        /**
         * Clear caches here so in sync with any new variations.
         *
         * @param WC_Data $object Object data.
         */
        public function clear_transients($object)
        {
        }
        /**
         * Delete a variation.
         *
         * @param WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error|WP_REST_Response
         */
        public function delete_item($request)
        {
        }
        /**
         * Bulk create, update and delete items.
         *
         * @since  3.0.0
         * @param WP_REST_Request $request Full details about the request.
         * @return array Of WP_Error or WP_REST_Response.
         */
        public function batch_items($request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Data         $object  Object data.
         * @param WP_REST_Request $request Request object.
         * @return array                   Links for the given post.
         */
        protected function prepare_links($object, $request)
        {
        }
        /**
         * Get the Variation's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API variations controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Variations_V2_Controller
     */
    class WC_REST_Product_Variations_Controller extends \WC_REST_Product_Variations_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Prepare a single variation output for response.
         *
         * @param  WC_Data         $object  Object data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_object_for_response($object, $request)
        {
        }
        /**
         * Prepare a single variation for create or update.
         *
         * @param  WP_REST_Request $request Request object.
         * @param  bool            $creating If is creating a new object.
         * @return WP_Error|WC_Data
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
        /**
         * Get the image for a product variation.
         *
         * @param WC_Product_Variation $variation Variation data.
         * @return array
         */
        protected function get_image($variation)
        {
        }
        /**
         * Set variation image.
         *
         * @throws WC_REST_Exception REST API exceptions.
         * @param  WC_Product_Variation $variation Variation instance.
         * @param  array                $image    Image data.
         * @return WC_Product_Variation
         */
        protected function set_variation_image($variation, $image)
        {
        }
        /**
         * Get the Variation's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Prepare objects query.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Full details about the request.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Get the query params for collections of attachments.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\RestApi\Controllers {
    /**
     * REST API variations controller class.
     */
    class Variations extends \WC_REST_Product_Variations_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/blocks';
        /**
         * Register the routes for variations.
         */
        public function register_routes()
        {
        }
        /**
         * Check if a given request has access to read items.
         *
         * @param  \WP_REST_Request $request Full details about the request.
         * @return \WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Prepare a single variation output for response.
         *
         * @param  \WC_Data         $object  Object data.
         * @param  \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        public function prepare_object_for_response($object, $request)
        {
        }
        /**
         * Get the Product's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
}
namespace {
    /**
     * REST API Coupons controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Posts_Controller
     */
    class WC_REST_Coupons_V1_Controller extends \WC_REST_Posts_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'coupons';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'shop_coupon';
        /**
         * Coupons actions.
         */
        public function __construct()
        {
        }
        /**
         * Register the routes for coupons.
         */
        public function register_routes()
        {
        }
        /**
         * Query args.
         *
         * @param array $args Query args
         * @param WP_REST_Request $request Request data.
         * @return array
         */
        public function query_args($args, $request)
        {
        }
        /**
         * Prepare a single coupon output for response.
         *
         * @param WP_Post $post Post object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $data
         */
        public function prepare_item_for_response($post, $request)
        {
        }
        /**
         * Only return writable props from schema.
         * @param  array $schema
         * @return bool
         */
        protected function filter_writable_props($schema)
        {
        }
        /**
         * Prepare a single coupon for create or update.
         *
         * @param WP_REST_Request $request Request object.
         * @return WP_Error|stdClass $data Post object.
         */
        protected function prepare_item_for_database($request)
        {
        }
        /**
         * Create a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Update a single coupon.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Saves a coupon to the database.
         *
         * @since 3.0.0
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|int
         */
        protected function save_coupon($request)
        {
        }
        /**
         * Get the Coupon's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections of attachments.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Customers controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Customer_Downloads_V1_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'customers/(?P<customer_id>[\\d]+)/downloads';
        /**
         * Register the routes for customers.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read customers.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Get all customer downloads.
         *
         * @param WP_REST_Request $request
         * @return array
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a single download output for response.
         *
         * @param stdObject $download Download object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($download, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param stdClass $download Download object.
         * @param WP_REST_Request $request Request object.
         * @return array Links for the given customer download.
         */
        protected function prepare_links($download, $request)
        {
        }
        /**
         * Get the Customer Download's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Customers controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Customers_V1_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'customers';
        /**
         * Register the routes for customers.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read customers.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access create customers.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a customer.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access update a customer.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access delete a customer.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access batch create, update and delete items.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function batch_items_permissions_check($request)
        {
        }
        /**
         * Get all customers.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Create a single customer.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Get a single customer.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Update a single user.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Delete a single customer.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare a single customer output for response.
         *
         * @param  WP_User          $user_data User object.
         * @param  WP_REST_Request  $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($user_data, $request)
        {
        }
        /**
         * Update customer meta fields.
         *
         * @param WC_Customer $customer
         * @param WP_REST_Request $request
         */
        protected function update_customer_meta_fields($customer, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WP_User $customer Customer object.
         * @return array Links for the given customer.
         */
        protected function prepare_links($customer)
        {
        }
        /**
         * Get the Customer's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get role names.
         *
         * @return array
         */
        protected function get_role_names()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Order Notes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Order_Notes_V1_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'orders/(?P<order_id>[\\d]+)/notes';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'shop_order';
        /**
         * Register the routes for order notes.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read order notes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access create order notes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a order note.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access delete a order note.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Get order notes from an order.
         *
         * @param WP_REST_Request $request
         *
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Create a single order note.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Get a single order note.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Delete a single order note.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare a single order note output for response.
         *
         * @param WP_Comment $note Order note object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($note, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WP_Comment $note Delivery order_note object.
         * @return array Links for the given order note.
         */
        protected function prepare_links($note)
        {
        }
        /**
         * Get the Order Notes schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Orders controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Posts_Controller
     */
    class WC_REST_Orders_V1_Controller extends \WC_REST_Posts_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'orders';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'shop_order';
        /**
         * Initialize orders actions.
         */
        public function __construct()
        {
        }
        /**
         * Register the routes for orders.
         */
        public function register_routes()
        {
        }
        /**
         * Prepare a single order output for response.
         *
         * @param WP_Post $post Post object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $data
         */
        public function prepare_item_for_response($post, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Order $order Order object.
         * @param WP_REST_Request $request Request object.
         * @return array Links for the given order.
         */
        protected function prepare_links($order, $request)
        {
        }
        /**
         * Query args.
         *
         * @param array $args
         * @param WP_REST_Request $request
         * @return array
         */
        public function query_args($args, $request)
        {
        }
        /**
         * Prepare a single order for create.
         *
         * @param  WP_REST_Request $request Request object.
         * @return WP_Error|WC_Order $data Object.
         */
        protected function prepare_item_for_database($request)
        {
        }
        /**
         * Create base WC Order object.
         * @deprecated 3.0.0
         * @param array $data
         * @return WC_Order
         */
        protected function create_base_order($data)
        {
        }
        /**
         * Only return writable props from schema.
         * @param  array $schema
         * @return bool
         */
        protected function filter_writable_props($schema)
        {
        }
        /**
         * Create order.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return int|WP_Error
         */
        protected function create_order($request)
        {
        }
        /**
         * Update order.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return int|WP_Error
         */
        protected function update_order($request)
        {
        }
        /**
         * Update address.
         *
         * @param WC_Order $order
         * @param array $posted
         * @param string $type
         */
        protected function update_address($order, $posted, $type = 'billing')
        {
        }
        /**
         * Gets the product ID from the SKU or posted ID.
         *
         * @param array $posted Request data
         *
         * @return int
         * @throws WC_REST_Exception
         */
        protected function get_product_id($posted)
        {
        }
        /**
         * Maybe set an item prop if the value was posted.
         * @param WC_Order_Item $item
         * @param string $prop
         * @param array $posted Request data.
         */
        protected function maybe_set_item_prop($item, $prop, $posted)
        {
        }
        /**
         * Maybe set item props if the values were posted.
         * @param WC_Order_Item $item
         * @param string[] $props
         * @param array $posted Request data.
         */
        protected function maybe_set_item_props($item, $props, $posted)
        {
        }
        /**
         * Create or update a line item.
         *
         * @param array $posted Line item data.
         * @param string $action 'create' to add line item or 'update' to update it.
         *
         * @return WC_Order_Item_Product
         * @throws WC_REST_Exception Invalid data, server error.
         */
        protected function prepare_line_items($posted, $action = 'create')
        {
        }
        /**
         * Create or update an order shipping method.
         *
         * @param $posted $shipping Item data.
         * @param string $action 'create' to add shipping or 'update' to update it.
         *
         * @return WC_Order_Item_Shipping
         * @throws WC_REST_Exception Invalid data, server error.
         */
        protected function prepare_shipping_lines($posted, $action)
        {
        }
        /**
         * Create or update an order fee.
         *
         * @param array $posted Item data.
         * @param string $action 'create' to add fee or 'update' to update it.
         *
         * @return WC_Order_Item_Fee
         * @throws WC_REST_Exception Invalid data, server error.
         */
        protected function prepare_fee_lines($posted, $action)
        {
        }
        /**
         * Create or update an order coupon.
         *
         * @param array $posted Item data.
         * @param string $action 'create' to add coupon or 'update' to update it.
         *
         * @return WC_Order_Item_Coupon
         * @throws WC_REST_Exception Invalid data, server error.
         */
        protected function prepare_coupon_lines($posted, $action)
        {
        }
        /**
         * Wrapper method to create/update order items.
         * When updating, the item ID provided is checked to ensure it is associated
         * with the order.
         *
         * @param WC_Order $order order
         * @param string $item_type
         * @param array $posted item provided in the request body
         * @throws WC_REST_Exception If item ID is not associated with order
         */
        protected function set_item($order, $item_type, $posted)
        {
        }
        /**
         * Helper method to check if the resource ID associated with the provided item is null.
         * Items can be deleted by setting the resource ID to null.
         *
         * @param array $item Item provided in the request body.
         * @return bool True if the item resource ID is null, false otherwise.
         */
        protected function item_is_null($item)
        {
        }
        /**
         * Create a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Update a single order.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Get order statuses without prefixes.
         * @return array
         */
        protected function get_order_statuses()
        {
        }
        /**
         * Get the Order's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Order Refunds controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Orders_V1_Controller
     */
    class WC_REST_Order_Refunds_V1_Controller extends \WC_REST_Orders_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'orders/(?P<order_id>[\\d]+)/refunds';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'shop_order_refund';
        /**
         * Order refunds actions.
         */
        public function __construct()
        {
        }
        /**
         * Register the routes for order refunds.
         */
        public function register_routes()
        {
        }
        /**
         * Prepare a single order refund output for response.
         *
         * @param WP_Post $post Post object.
         * @param WP_REST_Request $request Request object.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function prepare_item_for_response($post, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Order_Refund $refund Comment object.
         * @param WP_REST_Request $request Request object.
         * @return array Links for the given order refund.
         */
        protected function prepare_links($refund, $request)
        {
        }
        /**
         * Query args.
         *
         * @param array           $args    Request args.
         * @param WP_REST_Request $request Request object.
         * @return array
         */
        public function query_args($args, $request)
        {
        }
        /**
         * Create a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Get the Order's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Product Reviews Controller Class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Product_Reviews_V1_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/(?P<product_id>[\\d]+)/reviews';
        /**
         * Register the routes for product reviews.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read webhook deliveries.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a product review.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to create a new product review.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to update a product review.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to delete a product review.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Get all reviews from a product.
         *
         * @param WP_REST_Request $request
         *
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Get a single product review.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Create a product review.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Update a single product review.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Delete a product review.
         *
         * @param WP_REST_Request $request Full details about the request
         *
         * @return bool|WP_Error|WP_REST_Response
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare a single product review output for response.
         *
         * @param WP_Comment $review Product review object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($review, $request)
        {
        }
        /**
         * Prepare a single product review to be inserted into the database.
         *
         * @param  WP_REST_Request $request Request object.
         * @return array|WP_Error  $prepared_review
         */
        protected function prepare_item_for_database($request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WP_Comment $review Product review object.
         * @param WP_REST_Request $request Request object.
         * @return array Links for the given product review.
         */
        protected function prepare_links($review, $request)
        {
        }
        /**
         * Get the Product Review's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Product Shipping Classes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Terms_Controller
     */
    class WC_REST_Product_Shipping_Classes_V1_Controller extends \WC_REST_Terms_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/shipping_classes';
        /**
         * Taxonomy.
         *
         * @var string
         */
        protected $taxonomy = 'product_shipping_class';
        /**
         * Prepare a single product shipping class output for response.
         *
         * @param obj $item Term object.
         * @param WP_REST_Request $request
         * @return WP_REST_Response $response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get the Shipping Class schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Products controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Posts_Controller
     */
    class WC_REST_Products_V1_Controller extends \WC_REST_Posts_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'product';
        /**
         * Initialize product actions.
         */
        public function __construct()
        {
        }
        /**
         * Register the routes for products.
         */
        public function register_routes()
        {
        }
        /**
         * Get post types.
         *
         * @return array
         */
        protected function get_post_types()
        {
        }
        /**
         * Query args.
         *
         * @param array           $args    Request args.
         * @param WP_REST_Request $request Request data.
         * @return array
         */
        public function query_args($args, $request)
        {
        }
        /**
         * Get the downloads for a product or product variation.
         *
         * @param WC_Product|WC_Product_Variation $product Product instance.
         * @return array
         */
        protected function get_downloads($product)
        {
        }
        /**
         * Get taxonomy terms.
         *
         * @param WC_Product $product  Product instance.
         * @param string     $taxonomy Taxonomy slug.
         * @return array
         */
        protected function get_taxonomy_terms($product, $taxonomy = 'cat')
        {
        }
        /**
         * Get the images for a product or product variation.
         *
         * @param WC_Product|WC_Product_Variation $product Product instance.
         * @return array
         */
        protected function get_images($product)
        {
        }
        /**
         * Get attribute taxonomy label.
         *
         * @param  string $name Taxonomy name.
         * @return string
         */
        protected function get_attribute_taxonomy_label($name)
        {
        }
        /**
         * Get default attributes.
         *
         * @param WC_Product $product Product instance.
         * @return array
         */
        protected function get_default_attributes($product)
        {
        }
        /**
         * Get attribute options.
         *
         * @param int   $product_id Product ID.
         * @param array $attribute  Attribute data.
         * @return array
         */
        protected function get_attribute_options($product_id, $attribute)
        {
        }
        /**
         * Get the attributes for a product or product variation.
         *
         * @param WC_Product|WC_Product_Variation $product Product instance.
         * @return array
         */
        protected function get_attributes($product)
        {
        }
        /**
         * Get product menu order.
         *
         * @deprecated 3.0.0
         * @param WC_Product $product Product instance.
         * @return int
         */
        protected function get_product_menu_order($product)
        {
        }
        /**
         * Get product data.
         *
         * @param WC_Product $product Product instance.
         * @return array
         */
        protected function get_product_data($product)
        {
        }
        /**
         * Get an individual variation's data.
         *
         * @param WC_Product $product Product instance.
         * @return array
         */
        protected function get_variation_data($product)
        {
        }
        /**
         * Prepare a single product output for response.
         *
         * @param WP_Post         $post    Post object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($post, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Product      $product Product object.
         * @param WP_REST_Request $request Request object.
         * @return array Links for the given product.
         */
        protected function prepare_links($product, $request)
        {
        }
        /**
         * Prepare a single product for create or update.
         *
         * @param WP_REST_Request $request Request object.
         * @return WP_Error|stdClass $data Post object.
         */
        protected function prepare_item_for_database($request)
        {
        }
        /**
         * Create a single product.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Update a single product.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Saves a product to the database.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return int
         */
        public function save_product($request)
        {
        }
        /**
         * Save product images.
         *
         * @deprecated 3.0.0
         * @param int $product_id
         * @param array $images
         * @throws WC_REST_Exception
         */
        protected function save_product_images($product_id, $images)
        {
        }
        /**
         * Set product images.
         *
         * @throws WC_REST_Exception REST API exceptions.
         * @param WC_Product $product Product instance.
         * @param array      $images  Images data.
         * @return WC_Product
         */
        protected function set_product_images($product, $images)
        {
        }
        /**
         * Save product shipping data.
         *
         * @param WC_Product $product Product instance.
         * @param array      $data    Shipping data.
         * @return WC_Product
         */
        protected function save_product_shipping_data($product, $data)
        {
        }
        /**
         * Save downloadable files.
         *
         * @param WC_Product $product    Product instance.
         * @param array      $downloads  Downloads data.
         * @param int        $deprecated Deprecated since 3.0.
         * @return WC_Product
         */
        protected function save_downloadable_files($product, $downloads, $deprecated = 0)
        {
        }
        /**
         * Save taxonomy terms.
         *
         * @param WC_Product $product  Product instance.
         * @param array      $terms    Terms data.
         * @param string     $taxonomy Taxonomy name.
         * @return WC_Product
         */
        protected function save_taxonomy_terms($product, $terms, $taxonomy = 'cat')
        {
        }
        /**
         * Save default attributes.
         *
         * @since 3.0.0
         *
         * @param WC_Product      $product Product instance.
         * @param WP_REST_Request $request Request data.
         * @return WC_Product
         */
        protected function save_default_attributes($product, $request)
        {
        }
        /**
         * Save product meta.
         *
         * @deprecated 3.0.0
         * @param WC_Product $product
         * @param WP_REST_Request $request
         * @return bool
         * @throws WC_REST_Exception
         */
        protected function save_product_meta($product, $request)
        {
        }
        /**
         * Set product meta.
         *
         * @throws WC_REST_Exception REST API exceptions.
         * @param WC_Product      $product Product instance.
         * @param WP_REST_Request $request Request data.
         * @return WC_Product
         */
        protected function set_product_meta($product, $request)
        {
        }
        /**
         * Save variations.
         *
         * @throws WC_REST_Exception REST API exceptions.
         * @param WC_Product      $product          Product instance.
         * @param WP_REST_Request $request          Request data.
         * @return bool
         */
        protected function save_variations_data($product, $request)
        {
        }
        /**
         * Add post meta fields.
         *
         * @param WP_Post         $post    Post data.
         * @param WP_REST_Request $request Request data.
         * @return bool|WP_Error
         */
        protected function add_post_meta_fields($post, $request)
        {
        }
        /**
         * Update post meta fields.
         *
         * @param WP_Post         $post    Post data.
         * @param WP_REST_Request $request Request data.
         * @return bool|WP_Error
         */
        protected function update_post_meta_fields($post, $request)
        {
        }
        /**
         * Clear cache/transients.
         *
         * @param WP_Post $post Post data.
         */
        public function clear_transients($post)
        {
        }
        /**
         * Delete post.
         *
         * @param int|WP_Post $id Post ID or WP_Post instance.
         */
        protected function delete_post($id)
        {
        }
        /**
         * Delete a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function delete_item($request)
        {
        }
        /**
         * Get the Product's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections of attachments.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Report Sales controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Report_Sales_V1_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/sales';
        /**
         * Report instance.
         *
         * @var WC_Admin_Report
         */
        protected $report;
        /**
         * Register the routes for sales reports.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read report.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Get sales reports.
         *
         * @param WP_REST_Request $request
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report sales object for serialization.
         *
         * @param null $_
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($_, $request)
        {
        }
        /**
         * Setup the report object and parse any date filtering.
         *
         * @param array $filter date filtering
         */
        protected function setup_report($filter)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Report Top Sellers controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Report_Sales_V1_Controller
     */
    class WC_REST_Report_Top_Sellers_V1_Controller extends \WC_REST_Report_Sales_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/top_sellers';
        /**
         * Get sales reports.
         *
         * @param WP_REST_Request $request
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report sales object for serialization.
         *
         * @param stdClass $top_seller
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($top_seller, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Reports controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Reports_V1_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports';
        /**
         * Register the routes for reports.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read reports.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Get reports list.
         *
         * @since 3.5.0
         * @return array
         */
        protected function get_reports()
        {
        }
        /**
         * Get all reports.
         *
         * @param WP_REST_Request $request
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param stdClass $report Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Tax Classes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Tax_Classes_V1_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'taxes/classes';
        /**
         * Register the routes for tax classes.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read tax classes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access create tax classes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access delete a tax.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Get all tax classes.
         *
         * @param WP_REST_Request $request
         * @return array
         */
        public function get_items($request)
        {
        }
        /**
         * Create a single tax class.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Delete a single tax class.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare a single tax class output for response.
         *
         * @param array $tax_class Tax class data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($tax_class, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @return array Links for the given tax class.
         */
        protected function prepare_links()
        {
        }
        /**
         * Get the Tax Classes schema, conforming to JSON Schema
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Taxes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Taxes_V1_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'taxes';
        /**
         * Register the routes for taxes.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read taxes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access create taxes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a tax.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access update a tax.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access delete a tax.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access batch create, update and delete items.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function batch_items_permissions_check($request)
        {
        }
        /**
         * Get all taxes.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Take tax data from the request and return the updated or newly created rate.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @param stdClass|null $current Existing tax object.
         * @return object
         */
        protected function create_or_update_tax($request, $current = \null)
        {
        }
        /**
         * Create a single tax.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Get a single tax.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Update a single tax.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Delete a single tax.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare a single tax output for response.
         *
         * @param stdClass $tax Tax object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($tax, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param stdClass $tax Tax object.
         * @return array Links for the given tax.
         */
        protected function prepare_links($tax)
        {
        }
        /**
         * Get the Taxes schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Webhook Deliveries controller class.
     *
     * @deprecated 3.3.0 Webhooks deliveries logs now uses logging system.
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Webhook_Deliveries_V1_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'webhooks/(?P<webhook_id>[\\d]+)/deliveries';
        /**
         * Register the routes for webhook deliveries.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read taxes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a tax.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Get all webhook deliveries.
         *
         * @param WP_REST_Request $request
         *
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Get a single webhook delivery.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Prepare a single webhook delivery output for response.
         *
         * @param stdClass $log Delivery log object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($log, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param stdClass $log Delivery log object.
         * @return array Links for the given webhook delivery.
         */
        protected function prepare_links($log)
        {
        }
        /**
         * Get the Webhook's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Webhooks controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Webhooks_V1_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'webhooks';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'shop_webhook';
        /**
         * Register the routes for webhooks.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read webhooks.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access create webhooks.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a webhook.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access update a webhook.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access delete a webhook.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access batch create, update and delete items.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function batch_items_permissions_check($request)
        {
        }
        /**
         * Get the default REST API version.
         *
         * @since  3.0.0
         * @return string
         */
        protected function get_default_api_version()
        {
        }
        /**
         * Get all webhooks.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Get a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Create a single webhook.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Update a single webhook.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Delete a single webhook.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare a single webhook for create or update.
         *
         * @param WP_REST_Request $request Request object.
         * @return WP_Error|stdClass $data Post object.
         */
        protected function prepare_item_for_database($request)
        {
        }
        /**
         * Prepare a single webhook output for response.
         *
         * @param int               $id       Webhook ID or object.
         * @param WP_REST_Request   $request  Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($id, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param int $id Webhook ID.
         * @return array
         */
        protected function prepare_links($id)
        {
        }
        /**
         * Get the Webhook's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections of attachments.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Coupons controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_CRUD_Controller
     */
    class WC_REST_Coupons_V2_Controller extends \WC_REST_CRUD_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'coupons';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'shop_coupon';
        /**
         * Register the routes for coupons.
         */
        public function register_routes()
        {
        }
        /**
         * Get object.
         *
         * @since  3.0.0
         * @param  int $id Object ID.
         * @return WC_Data
         */
        protected function get_object($id)
        {
        }
        /**
         * Get formatted item data.
         *
         * @since  3.0.0
         * @param  WC_Data $object WC_Data instance.
         * @return array
         */
        protected function get_formatted_item_data($object)
        {
        }
        /**
         * Prepare a single coupon output for response.
         *
         * @since  3.0.0
         * @param  WC_Data         $object  Object data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_object_for_response($object, $request)
        {
        }
        /**
         * Prepare objects query.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Full details about the request.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Only return writable props from schema.
         *
         * @param  array $schema Schema.
         * @return bool
         */
        protected function filter_writable_props($schema)
        {
        }
        /**
         * Prepare a single coupon for create or update.
         *
         * @param  WP_REST_Request $request Request object.
         * @param  bool            $creating If is creating a new object.
         * @return WP_Error|WC_Data
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
        /**
         * Get the Coupon's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections of attachments.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Customers controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Customer_Downloads_V1_Controller
     */
    class WC_REST_Customer_Downloads_V2_Controller extends \WC_REST_Customer_Downloads_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Prepare a single download output for response.
         *
         * @param stdClass        $download Download object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($download, $request)
        {
        }
        /**
         * Get the Customer Download's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Customers controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Customers_V1_Controller
     */
    class WC_REST_Customers_V2_Controller extends \WC_REST_Customers_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Get formatted item data.
         *
         * @since  3.0.0
         * @param  WC_Data $object WC_Data instance.
         * @return array
         */
        protected function get_formatted_item_data($object)
        {
        }
        /**
         * Prepare a single customer output for response.
         *
         * @param  WP_User         $user_data User object.
         * @param  WP_REST_Request $request   Request object.
         * @return WP_REST_Response $response  Response data.
         */
        public function prepare_item_for_response($user_data, $request)
        {
        }
        /**
         * Update customer meta fields.
         *
         * @param WC_Customer     $customer Customer data.
         * @param WP_REST_Request $request  Request data.
         */
        protected function update_customer_meta_fields($customer, $request)
        {
        }
        /**
         * Get the Customer's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Orders controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_CRUD_Controller
     */
    class WC_REST_Orders_V2_Controller extends \WC_REST_CRUD_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'orders';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'shop_order';
        /**
         * If object is hierarchical.
         *
         * @var bool
         */
        protected $hierarchical = \true;
        /**
         * Stores the request.
         *
         * @var array
         */
        protected $request = array();
        /**
         * Register the routes for orders.
         */
        public function register_routes()
        {
        }
        /**
         * Get object. Return false if object is not of required type.
         *
         * @since  3.0.0
         * @param  int $id Object ID.
         * @return WC_Data|bool
         */
        protected function get_object($id)
        {
        }
        /**
         * Expands an order item to get its data.
         *
         * @param WC_Order_item $item Order item data.
         * @return array
         */
        protected function get_order_item_data($item)
        {
        }
        /**
         * Get formatted item data.
         *
         * @since  3.0.0
         * @param  WC_Data $object WC_Data instance.
         * @return array
         */
        protected function get_formatted_item_data($object)
        {
        }
        /**
         * Prepare a single order output for response.
         *
         * @since  3.0.0
         * @param  WC_Data         $object  Object data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_object_for_response($object, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Data         $object  Object data.
         * @param WP_REST_Request $request Request object.
         * @return array                   Links for the given post.
         */
        protected function prepare_links($object, $request)
        {
        }
        /**
         * Prepare objects query.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Full details about the request.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Only return writable props from schema.
         *
         * @param  array $schema Schema.
         * @return bool
         */
        protected function filter_writable_props($schema)
        {
        }
        /**
         * Prepare a single order for create or update.
         *
         * @param  WP_REST_Request $request Request object.
         * @param  bool            $creating If is creating a new object.
         * @return WP_Error|WC_Data
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
        /**
         * Save an object data.
         *
         * @since  3.0.0
         * @throws WC_REST_Exception But all errors are validated before returning any data.
         * @param  WP_REST_Request $request  Full details about the request.
         * @param  bool            $creating If is creating a new object.
         * @return WC_Data|WP_Error
         */
        protected function save_object($request, $creating = \false)
        {
        }
        /**
         * Update address.
         *
         * @param WC_Order $order  Order data.
         * @param array    $posted Posted data.
         * @param string   $type   Address type.
         */
        protected function update_address($order, $posted, $type = 'billing')
        {
        }
        /**
         * Gets the product ID from the SKU or posted ID.
         *
         * @throws WC_REST_Exception When SKU or ID is not valid.
         * @param array $posted Request data.
         * @return int
         */
        protected function get_product_id($posted)
        {
        }
        /**
         * Maybe set an item prop if the value was posted.
         *
         * @param WC_Order_Item $item   Order item.
         * @param string        $prop   Order property.
         * @param array         $posted Request data.
         */
        protected function maybe_set_item_prop($item, $prop, $posted)
        {
        }
        /**
         * Maybe set item props if the values were posted.
         *
         * @param WC_Order_Item $item   Order item data.
         * @param string[]      $props  Properties.
         * @param array         $posted Request data.
         */
        protected function maybe_set_item_props($item, $props, $posted)
        {
        }
        /**
         * Maybe set item meta if posted.
         *
         * @param WC_Order_Item $item   Order item data.
         * @param array         $posted Request data.
         */
        protected function maybe_set_item_meta_data($item, $posted)
        {
        }
        /**
         * Create or update a line item.
         *
         * @param array  $posted Line item data.
         * @param string $action 'create' to add line item or 'update' to update it.
         * @param object $item Passed when updating an item. Null during creation.
         * @return WC_Order_Item_Product
         * @throws WC_REST_Exception Invalid data, server error.
         */
        protected function prepare_line_items($posted, $action = 'create', $item = \null)
        {
        }
        /**
         * Create or update an order shipping method.
         *
         * @param array  $posted $shipping Item data.
         * @param string $action 'create' to add shipping or 'update' to update it.
         * @param object $item Passed when updating an item. Null during creation.
         * @return WC_Order_Item_Shipping
         * @throws WC_REST_Exception Invalid data, server error.
         */
        protected function prepare_shipping_lines($posted, $action = 'create', $item = \null)
        {
        }
        /**
         * Create or update an order fee.
         *
         * @param array  $posted Item data.
         * @param string $action 'create' to add fee or 'update' to update it.
         * @param object $item Passed when updating an item. Null during creation.
         * @return WC_Order_Item_Fee
         * @throws WC_REST_Exception Invalid data, server error.
         */
        protected function prepare_fee_lines($posted, $action = 'create', $item = \null)
        {
        }
        /**
         * Create or update an order coupon.
         *
         * @param array  $posted Item data.
         * @param string $action 'create' to add coupon or 'update' to update it.
         * @param object $item Passed when updating an item. Null during creation.
         * @return WC_Order_Item_Coupon
         * @throws WC_REST_Exception Invalid data, server error.
         */
        protected function prepare_coupon_lines($posted, $action = 'create', $item = \null)
        {
        }
        /**
         * Wrapper method to create/update order items.
         * When updating, the item ID provided is checked to ensure it is associated
         * with the order.
         *
         * @param WC_Order $order order object.
         * @param string   $item_type The item type.
         * @param array    $posted item provided in the request body.
         * @throws WC_REST_Exception If item ID is not associated with order.
         */
        protected function set_item($order, $item_type, $posted)
        {
        }
        /**
         * Helper method to check if the resource ID associated with the provided item is null.
         * Items can be deleted by setting the resource ID to null.
         *
         * @param array $item Item provided in the request body.
         * @return bool True if the item resource ID is null, false otherwise.
         */
        protected function item_is_null($item)
        {
        }
        /**
         * Get order statuses without prefixes.
         *
         * @return array
         */
        protected function get_order_statuses()
        {
        }
        /**
         * Get the Order's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Network Orders controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Orders_V2_Controller
     */
    class WC_REST_Network_Orders_V2_Controller extends \WC_REST_Orders_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Register the routes for network orders.
         */
        public function register_routes()
        {
        }
        /**
         * Retrieves the item's schema for display / public consumption purposes.
         *
         * @return array Public item schema data.
         */
        public function get_public_item_schema()
        {
        }
        /**
         * Does a permissions check for the proper requested blog
         *
         * @param WP_REST_Request $request Full details about the request.
         *
         * @return bool $permission
         */
        public function network_orders_permissions_check($request)
        {
        }
        /**
         * Get a collection of orders from the requested blog id
         *
         * @param WP_REST_Request $request Full details about the request.
         *
         * @return WP_REST_Response
         */
        public function network_orders($request)
        {
        }
        /**
         * Filters the post statuses to on hold and processing for the network order query.
         *
         * @param array $args Query args.
         *
         * @return array
         */
        public function network_orders_filter_args($args)
        {
        }
    }
    /**
     * REST API Order Notes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Order_Notes_V1_Controller
     */
    class WC_REST_Order_Notes_V2_Controller extends \WC_REST_Order_Notes_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Get order notes from an order.
         *
         * @param WP_REST_Request $request Request data.
         *
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a single order note output for response.
         *
         * @param WP_Comment      $note Order note object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($note, $request)
        {
        }
        /**
         * Get the Order Notes schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Order Refunds controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Orders_V2_Controller
     */
    class WC_REST_Order_Refunds_V2_Controller extends \WC_REST_Orders_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'orders/(?P<order_id>[\\d]+)/refunds';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'shop_order_refund';
        /**
         * Stores the request.
         *
         * @var array
         */
        protected $request = array();
        /**
         * Order refunds actions.
         */
        public function __construct()
        {
        }
        /**
         * Register the routes for order refunds.
         */
        public function register_routes()
        {
        }
        /**
         * Get object.
         *
         * @since  3.0.0
         * @param  int $id Object ID.
         * @return WC_Data
         */
        protected function get_object($id)
        {
        }
        /**
         * Get formatted item data.
         *
         * @since  3.0.0
         * @param  WC_Data $object WC_Data instance.
         * @return array
         */
        protected function get_formatted_item_data($object)
        {
        }
        /**
         * Prepare a single order output for response.
         *
         * @since  3.0.0
         *
         * @param  WC_Data         $object  Object data.
         * @param  WP_REST_Request $request Request object.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function prepare_object_for_response($object, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Data         $object  Object data.
         * @param WP_REST_Request $request Request object.
         * @return array                   Links for the given post.
         */
        protected function prepare_links($object, $request)
        {
        }
        /**
         * Prepare objects query.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Full details about the request.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Prepares one object for create or update operation.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Request object.
         * @param  bool            $creating If is creating a new object.
         * @return WP_Error|WC_Data The prepared item, or WP_Error object on failure.
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
        /**
         * Save an object data.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request  Full details about the request.
         * @param  bool            $creating If is creating a new object.
         * @return WC_Data|WP_Error
         */
        protected function save_object($request, $creating = \false)
        {
        }
        /**
         * Get the Order's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * Paymenga gateways controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Payment_Gateways_V2_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'payment_gateways';
        /**
         * Register the route for /payment_gateways and /payment_gateways/<id>
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to view payment gateways.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a payment gateway.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check whether a given request has permission to edit payment gateways.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_items_permissions_check($request)
        {
        }
        /**
         * Get payment gateways.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Get a single payment gateway.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|WP_Error
         */
        public function get_item($request)
        {
        }
        /**
         * Update A Single Payment Method.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|WP_Error
         */
        public function update_item($request)
        {
        }
        /**
         * Get a gateway based on the current request object.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|null
         */
        public function get_gateway($request)
        {
        }
        /**
         * Prepare a payment gateway for response.
         *
         * @param  WC_Payment_Gateway $gateway    Payment gateway object.
         * @param  WP_REST_Request    $request    Request object.
         * @return WP_REST_Response   $response   Response data.
         */
        public function prepare_item_for_response($gateway, $request)
        {
        }
        /**
         * Return settings associated with this payment gateway.
         *
         * @param WC_Payment_Gateway $gateway Gateway data.
         *
         * @return array
         */
        public function get_settings($gateway)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param  WC_Payment_Gateway $gateway    Payment gateway object.
         * @param  WP_REST_Request    $request    Request object.
         * @return array
         */
        protected function prepare_links($gateway, $request)
        {
        }
        /**
         * Get the payment gateway schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get any query params needed.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Product Reviews Controller Class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Reviews_V1_Controller
     */
    class WC_REST_Product_Reviews_V2_Controller extends \WC_REST_Product_Reviews_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/(?P<product_id>[\\d]+)/reviews';
        /**
         * Register the routes for product reviews.
         */
        public function register_routes()
        {
        }
        /**
         * Check if a given request has access to batch manage product reviews.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function batch_items_permissions_check($request)
        {
        }
        /**
         * Prepare a single product review output for response.
         *
         * @param WP_Comment      $review Product review object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($review, $request)
        {
        }
        /**
         * Bulk create, update and delete items.
         *
         * @since  3.0.0
         * @param WP_REST_Request $request Full details about the request.
         * @return array Of WP_Error or WP_REST_Response.
         */
        public function batch_items($request)
        {
        }
        /**
         * Get the Product Review's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Product Shipping Classes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Shipping_Classes_V1_Controller
     */
    class WC_REST_Product_Shipping_Classes_V2_Controller extends \WC_REST_Product_Shipping_Classes_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
    }
    /**
     * REST API Report Sales controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Report_Sales_V1_Controller
     */
    class WC_REST_Report_Sales_V2_Controller extends \WC_REST_Report_Sales_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
    }
    /**
     * REST API Report Top Sellers controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Report_Top_Sellers_V1_Controller
     */
    class WC_REST_Report_Top_Sellers_V2_Controller extends \WC_REST_Report_Top_Sellers_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
    }
    /**
     * REST API Reports controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Reports_V1_Controller
     */
    class WC_REST_Reports_V2_Controller extends \WC_REST_Reports_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
    }
    /**
     * REST API Setting Options controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Setting_Options_V2_Controller extends \WC_REST_Controller
    {
        /**
         * WP REST API namespace/version.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'settings/(?P<group_id>[\\w-]+)';
        /**
         * Register routes.
         *
         * @since 3.0.0
         */
        public function register_routes()
        {
        }
        /**
         * Return a single setting.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Return all settings in a group.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Get all settings in a group.
         *
         * @since  3.0.0
         * @param string $group_id Group ID.
         * @return array|WP_Error
         */
        public function get_group_settings($group_id)
        {
        }
        /**
         * Returns a list of countries and states for use in the base location setting.
         *
         * @since  3.0.7
         * @return array Array of states and countries.
         */
        private function get_countries_and_states()
        {
        }
        /**
         * Get setting data.
         *
         * @since  3.0.0
         * @param string $group_id Group ID.
         * @param string $setting_id Setting ID.
         * @return stdClass|WP_Error
         */
        public function get_setting($group_id, $setting_id)
        {
        }
        /**
         * Bulk create, update and delete items.
         *
         * @since  3.0.0
         * @param WP_REST_Request $request Full details about the request.
         * @return array Of WP_Error or WP_REST_Response.
         */
        public function batch_items($request)
        {
        }
        /**
         * Update a single setting in a group.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Prepare a single setting object for response.
         *
         * @since  3.0.0
         * @param object          $item Setting object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @since  3.0.0
         * @param string $setting_id Setting ID.
         * @param string $group_id Group ID.
         * @return array Links for the given setting.
         */
        protected function prepare_links($setting_id, $group_id)
        {
        }
        /**
         * Makes sure the current user has access to READ the settings APIs.
         *
         * @since  3.0.0
         * @param WP_REST_Request $request Full data about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Makes sure the current user has access to WRITE the settings APIs.
         *
         * @since  3.0.0
         * @param WP_REST_Request $request Full data about the request.
         * @return WP_Error|boolean
         */
        public function update_items_permissions_check($request)
        {
        }
        /**
         * Filters out bad values from the settings array/filter so we
         * only return known values via the API.
         *
         * @since 3.0.0
         * @param  array $setting Settings.
         * @return array
         */
        public function filter_setting($setting)
        {
        }
        /**
         * For image_width, Crop can return "0" instead of false -- so we want
         * to make sure we return these consistently the same we accept them.
         *
         * @todo remove in 4.0
         * @since 3.0.0
         * @param  array $setting Settings.
         * @return array
         */
        public function cast_image_width($setting)
        {
        }
        /**
         * Callback for allowed keys for each setting response.
         *
         * @since  3.0.0
         * @param  string $key Key to check.
         * @return boolean
         */
        public function allowed_setting_keys($key)
        {
        }
        /**
         * Boolean for if a setting type is a valid supported setting type.
         *
         * @since  3.0.0
         * @param  string $type Type.
         * @return bool
         */
        public function is_setting_type_valid($type)
        {
        }
        /**
         * Get the settings schema, conforming to JSON Schema.
         *
         * @since 3.0.0
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Settings controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Settings_V2_Controller extends \WC_REST_Controller
    {
        /**
         * WP REST API namespace/version.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'settings';
        /**
         * Register routes.
         *
         * @since 3.0.0
         */
        public function register_routes()
        {
        }
        /**
         * Get all settings groups items.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param string $group_id Group ID.
         * @return array Links for the given group.
         */
        protected function prepare_links($group_id)
        {
        }
        /**
         * Prepare a report sales object for serialization.
         *
         * @since  3.0.0
         * @param array           $item Group object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Filters out bad values from the groups array/filter so we
         * only return known values via the API.
         *
         * @since 3.0.0
         * @param  array $group Group.
         * @return array
         */
        public function filter_group($group)
        {
        }
        /**
         * Callback for allowed keys for each group response.
         *
         * @since  3.0.0
         * @param  string $key Key to check.
         * @return boolean
         */
        public function allowed_group_keys($key)
        {
        }
        /**
         * Returns default settings for groups. null means the field is required.
         *
         * @since  3.0.0
         * @return array
         */
        protected function group_defaults()
        {
        }
        /**
         * Makes sure the current user has access to READ the settings APIs.
         *
         * @since  3.0.0
         * @param WP_REST_Request $request Full data about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Get the groups schema, conforming to JSON Schema.
         *
         * @since  3.0.0
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * Shipping methods controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Shipping_Methods_V2_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'shipping_methods';
        /**
         * Register the route for /shipping_methods and /shipping_methods/<method>
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to view shipping methods.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a shipping method.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Get shipping methods.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Get a single Shipping Method.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|WP_Error
         */
        public function get_item($request)
        {
        }
        /**
         * Prepare a shipping method for response.
         *
         * @param  WC_Shipping_Method $method   Shipping method object.
         * @param  WP_REST_Request    $request  Request object.
         * @return WP_REST_Response   $response Response data.
         */
        public function prepare_item_for_response($method, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Shipping_Method $method Shipping method object.
         * @param WP_REST_Request    $request Request object.
         * @return array
         */
        protected function prepare_links($method, $request)
        {
        }
        /**
         * Get the shipping method schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get any query params needed.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Shipping Zones base class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    abstract class WC_REST_Shipping_Zones_Controller_Base extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'shipping/zones';
        /**
         * Retrieve a Shipping Zone by it's ID.
         *
         * @param int $zone_id Shipping Zone ID.
         * @return WC_Shipping_Zone|WP_Error
         */
        protected function get_zone($zone_id)
        {
        }
        /**
         * Check whether a given request has permission to read Shipping Zones.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to create Shipping Zones.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check whether a given request has permission to edit Shipping Zones.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_items_permissions_check($request)
        {
        }
        /**
         * Check whether a given request has permission to delete Shipping Zones.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function delete_items_permissions_check($request)
        {
        }
    }
    /**
     * REST API Shipping Zone Locations class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Shipping_Zones_Controller_Base
     */
    class WC_REST_Shipping_Zone_Locations_V2_Controller extends \WC_REST_Shipping_Zones_Controller_Base
    {
        /**
         * Register the routes for Shipping Zone Locations.
         */
        public function register_routes()
        {
        }
        /**
         * Get all Shipping Zone Locations.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Update all Shipping Zone Locations.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|WP_Error
         */
        public function update_items($request)
        {
        }
        /**
         * Prepare the Shipping Zone Location for the REST response.
         *
         * @param array           $item Shipping Zone Location.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param int $zone_id Given Shipping Zone ID.
         * @return array Links for the given Shipping Zone Location.
         */
        protected function prepare_links($zone_id)
        {
        }
        /**
         * Get the Shipping Zone Locations schema, conforming to JSON Schema
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Shipping Zone Methods class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Shipping_Zones_Controller_Base
     */
    class WC_REST_Shipping_Zone_Methods_V2_Controller extends \WC_REST_Shipping_Zones_Controller_Base
    {
        /**
         * Register the routes for Shipping Zone Methods.
         */
        public function register_routes()
        {
        }
        /**
         * Get a single Shipping Zone Method.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|WP_Error
         */
        public function get_item($request)
        {
        }
        /**
         * Get all Shipping Zone Methods.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Create a new shipping zone method instance.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function create_item($request)
        {
        }
        /**
         * Delete a shipping method instance.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function delete_item($request)
        {
        }
        /**
         * Update A Single Shipping Zone Method.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|WP_Error
         */
        public function update_item($request)
        {
        }
        /**
         * Updates settings, order, and enabled status on create.
         *
         * @param int                $instance_id Instance ID.
         * @param WC_Shipping_Method $method      Shipping method data.
         * @param WP_REST_Request    $request     Request data.
         *
         * @return WC_Shipping_Method
         */
        public function update_fields($instance_id, $method, $request)
        {
        }
        /**
         * Prepare the Shipping Zone Method for the REST response.
         *
         * @param array           $item Shipping Zone Method.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Return settings associated with this shipping zone method instance.
         *
         * @param WC_Shipping_Method $item Shipping method data.
         *
         * @return array
         */
        public function get_settings($item)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param int $zone_id Given Shipping Zone ID.
         * @param int $instance_id Given Shipping Zone Method Instance ID.
         * @return array Links for the given Shipping Zone Method.
         */
        protected function prepare_links($zone_id, $instance_id)
        {
        }
        /**
         * Get the Shipping Zone Methods schema, conforming to JSON Schema
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Shipping Zones class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Shipping_Zones_Controller_Base
     */
    class WC_REST_Shipping_Zones_V2_Controller extends \WC_REST_Shipping_Zones_Controller_Base
    {
        /**
         * Register the routes for Shipping Zones.
         */
        public function register_routes()
        {
        }
        /**
         * Get a single Shipping Zone.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|WP_Error
         */
        public function get_item($request)
        {
        }
        /**
         * Get all Shipping Zones.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Create a single Shipping Zone.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function create_item($request)
        {
        }
        /**
         * Update a single Shipping Zone.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function update_item($request)
        {
        }
        /**
         * Delete a single Shipping Zone.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare the Shipping Zone for the REST response.
         *
         * @param array           $item Shipping Zone.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param int $zone_id Given Shipping Zone ID.
         * @return array Links for the given Shipping Zone.
         */
        protected function prepare_links($zone_id)
        {
        }
        /**
         * Get the Shipping Zones schema, conforming to JSON Schema
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * System status tools controller.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_System_Status_Tools_V2_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'system_status/tools';
        /**
         * Register the routes for /system_status/tools/*.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to view system status tools.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check whether a given request has permission to view a specific system status tool.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check whether a given request has permission to execute a specific system status tool.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * A list of available tools for use in the system status section.
         * 'button' becomes 'action' in the API.
         *
         * @return array
         */
        public function get_tools()
        {
        }
        /**
         * Get a list of system status tools.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Return a single tool.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Update (execute) a tool.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Prepare a tool item for serialization.
         *
         * @param  array           $item     Object.
         * @param  WP_REST_Request $request  Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get the system status tools schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param string $id ID.
         * @return array
         */
        protected function prepare_links($id)
        {
        }
        /**
         * Get any query params needed.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Actually executes a tool.
         *
         * @param  string $tool Tool.
         * @return array
         */
        public function execute_tool($tool)
        {
        }
    }
    /**
     * System status controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_System_Status_V2_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'system_status';
        /**
         * Register the route for /system_status
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to view system status.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Get a system status info, by section.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Get the system status schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Return an array of sections and the data associated with each.
         *
         * @return array
         */
        public function get_item_mappings()
        {
        }
        /**
         * Get array of environment information. Includes thing like software
         * versions, and various server settings.
         *
         * @return array
         */
        public function get_environment_info()
        {
        }
        /**
         * Add prefix to table.
         *
         * @param string $table Table name.
         * @return stromg
         */
        protected function add_db_table_prefix($table)
        {
        }
        /**
         * Get array of database information. Version, prefix, and table existence.
         *
         * @return array
         */
        public function get_database_info()
        {
        }
        /**
         * Get array of counts of objects. Orders, products, etc.
         *
         * @return array
         */
        public function get_post_type_counts()
        {
        }
        /**
         * Get a list of plugins active on the site.
         *
         * @return array
         */
        public function get_active_plugins()
        {
        }
        /**
         * Get a list of inplugins active on the site.
         *
         * @return array
         */
        public function get_inactive_plugins()
        {
        }
        /**
         * Format plugin data, including data on updates, into a standard format.
         *
         * @since 3.6.0
         * @param string $plugin Plugin directory/file.
         * @param array  $data Plugin data from WP.
         * @return array Formatted data.
         */
        protected function format_plugin_data($plugin, $data)
        {
        }
        /**
         * Get a list of Dropins and MU plugins.
         *
         * @since 3.6.0
         * @return array
         */
        public function get_dropins_mu_plugins()
        {
        }
        /**
         * Get info on the current active theme, info on parent theme (if presnet)
         * and a list of template overrides.
         *
         * @return array
         */
        public function get_theme_info()
        {
        }
        /**
         * Get some setting values for the site that are useful for debugging
         * purposes. For full settings access, use the settings api.
         *
         * @return array
         */
        public function get_settings()
        {
        }
        /**
         * Returns security tips.
         *
         * @return array
         */
        public function get_security_info()
        {
        }
        /**
         * Returns a mini-report on WC pages and if they are configured correctly:
         * Present, visible, and including the correct shortcode.
         *
         * @return array
         */
        public function get_pages()
        {
        }
        /**
         * Get any query params needed.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Prepare the system status response
         *
         * @param  array           $system_status System status data.
         * @param  WP_REST_Request $request       Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($system_status, $request)
        {
        }
    }
    /**
     * REST API Tax Classes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Tax_Classes_V1_Controller
     */
    class WC_REST_Tax_Classes_V2_Controller extends \WC_REST_Tax_Classes_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
    }
    /**
     * REST API Taxes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Taxes_V1_Controller
     */
    class WC_REST_Taxes_V2_Controller extends \WC_REST_Taxes_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
    }
    /**
     * REST API Webhook Deliveries controller class.
     *
     * @deprecated 3.3.0 Webhooks deliveries logs now uses logging system.
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Webhook_Deliveries_V1_Controller
     */
    class WC_REST_Webhook_Deliveries_V2_Controller extends \WC_REST_Webhook_Deliveries_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Prepare a single webhook delivery output for response.
         *
         * @param  stdClass        $log Delivery log object.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($log, $request)
        {
        }
        /**
         * Get the Webhook's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Webhooks controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Webhooks_V1_Controller
     */
    class WC_REST_Webhooks_V2_Controller extends \WC_REST_Webhooks_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Prepare a single webhook output for response.
         *
         * @param int             $id       Webhook ID.
         * @param WP_REST_Request $request  Request object.
         * @return WP_REST_Response $response
         */
        public function prepare_item_for_response($id, $request)
        {
        }
        /**
         * Get the default REST API version.
         *
         * @since  3.0.0
         * @return string
         */
        protected function get_default_api_version()
        {
        }
        /**
         * Get the Webhook's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Coupons controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Coupons_V2_Controller
     */
    class WC_REST_Coupons_Controller extends \WC_REST_Coupons_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Customers controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Customer_Downloads_V2_Controller
     */
    class WC_REST_Customer_Downloads_Controller extends \WC_REST_Customer_Downloads_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Customers controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Customers_V2_Controller
     */
    class WC_REST_Customers_Controller extends \WC_REST_Customers_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Get formatted item data.
         *
         * @param WC_Data $object WC_Data instance.
         *
         * @since  3.0.0
         * @return array
         */
        protected function get_formatted_item_data($object)
        {
        }
        /**
         * Get the Customer's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Data controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Data_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'data';
        /**
         * Register routes.
         *
         * @since 3.5.0
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read site data.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check whether a given request has permission to read site settings.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Return the list of data resources.
         *
         * @since  3.5.0
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a data resource object for serialization.
         *
         * @param stdClass        $resource Resource data.
         * @param WP_REST_Request $request  Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($resource, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param object $item Data object.
         * @return array Links for the given country.
         */
        protected function prepare_links($item)
        {
        }
        /**
         * Get the data index schema, conforming to JSON Schema.
         *
         * @since  3.5.0
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Data continents controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Data_Continents_Controller extends \WC_REST_Data_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'data/continents';
        /**
         * Register routes.
         *
         * @since 3.5.0
         */
        public function register_routes()
        {
        }
        /**
         * Return the list of countries and states for a given continent.
         *
         * @since  3.5.0
         * @param  string          $continent_code Continent code.
         * @param  WP_REST_Request $request        Request data.
         * @return array|mixed Response data, ready for insertion into collection data.
         */
        public function get_continent($continent_code = \false, $request)
        {
        }
        /**
         * Return the list of states for all continents.
         *
         * @since  3.5.0
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Return the list of locations for a given continent.
         *
         * @since  3.5.0
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Prepare the data object for response.
         *
         * @since  3.5.0
         * @param object          $item Data object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param object $item Data object.
         * @return array Links for the given continent.
         */
        protected function prepare_links($item)
        {
        }
        /**
         * Get the location schema, conforming to JSON Schema.
         *
         * @since  3.5.0
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Data countries controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Data_Countries_Controller extends \WC_REST_Data_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'data/countries';
        /**
         * Register routes.
         *
         * @since 3.5.0
         */
        public function register_routes()
        {
        }
        /**
         * Get a list of countries and states.
         *
         * @param  string          $country_code Country code.
         * @param  WP_REST_Request $request      Request data.
         * @return array|mixed Response data, ready for insertion into collection data.
         */
        public function get_country($country_code = \false, $request)
        {
        }
        /**
         * Return the list of states for all countries.
         *
         * @since  3.5.0
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Return the list of states for a given country.
         *
         * @since  3.5.0
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Prepare the data object for response.
         *
         * @since  3.5.0
         * @param object          $item Data object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param object $item Data object.
         * @return array Links for the given country.
         */
        protected function prepare_links($item)
        {
        }
        /**
         * Get the location schema, conforming to JSON Schema.
         *
         * @since  3.5.0
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Data Currencies controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     */
    class WC_REST_Data_Currencies_Controller extends \WC_REST_Data_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'data/currencies';
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Get currency information.
         *
         * @param  string          $code    Currency code.
         * @param  WP_REST_Request $request Request data.
         * @return array|mixed Response data, ready for insertion into collection data.
         */
        public function get_currency($code = \false, $request)
        {
        }
        /**
         * Return the list of currencies.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Return information for a specific currency.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Return information for the current site currency.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_current_item($request)
        {
        }
        /**
         * Prepare the data object for response.
         *
         * @param object          $item Data object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param object $item Data object.
         * @return array Links for the given currency.
         */
        protected function prepare_links($item)
        {
        }
        /**
         * Get the currency schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Network Orders controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Network_Orders_V2_Controller
     */
    class WC_REST_Network_Orders_Controller extends \WC_REST_Network_Orders_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Order Notes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Order_Notes_V2_Controller
     */
    class WC_REST_Order_Notes_Controller extends \WC_REST_Order_Notes_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Prepare a single order note output for response.
         *
         * @param WP_Comment      $note    Order note object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($note, $request)
        {
        }
        /**
         * Create a single order note.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Get the Order Notes schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Order Refunds controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Order_Refunds_V2_Controller
     */
    class WC_REST_Order_Refunds_Controller extends \WC_REST_Order_Refunds_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Prepares one object for create or update operation.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Request object.
         * @param  bool            $creating If is creating a new object.
         * @return WP_Error|WC_Data The prepared item, or WP_Error object on failure.
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
    }
    /**
     * REST API Orders controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Orders_V2_Controller
     */
    class WC_REST_Orders_Controller extends \WC_REST_Orders_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Calculate coupons.
         *
         * @throws WC_REST_Exception When fails to set any item.
         * @param WP_REST_Request $request Request object.
         * @param WC_Order        $order   Order data.
         * @return bool
         */
        protected function calculate_coupons($request, $order)
        {
        }
        /**
         * Prepare a single order for create or update.
         *
         * @throws WC_REST_Exception When fails to set any item.
         * @param  WP_REST_Request $request Request object.
         * @param  bool            $creating If is creating a new object.
         * @return WP_Error|WC_Data
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
        /**
         * Save an object data.
         *
         * @since  3.0.0
         * @throws WC_REST_Exception But all errors are validated before returning any data.
         * @param  WP_REST_Request $request  Full details about the request.
         * @param  bool            $creating If is creating a new object.
         * @return WC_Data|WP_Error
         */
        protected function save_object($request, $creating = \false)
        {
        }
        /**
         * Prepare objects query.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Full details about the request.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Get the Order's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * Paymenga gateways controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Payment_Gateways_V2_Controller
     */
    class WC_REST_Payment_Gateways_Controller extends \WC_REST_Payment_Gateways_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Prepare a payment gateway for response.
         *
         * @param  WC_Payment_Gateway $gateway    Payment gateway object.
         * @param  WP_REST_Request    $request    Request object.
         * @return WP_REST_Response   $response   Response data.
         */
        public function prepare_item_for_response($gateway, $request)
        {
        }
        /**
         * Return settings associated with this payment gateway.
         *
         * @param WC_Payment_Gateway $gateway Gateway instance.
         *
         * @return array
         */
        public function get_settings($gateway)
        {
        }
        /**
         * Get the payment gateway schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Product Reviews Controller Class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Product_Reviews_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/reviews';
        /**
         * Register the routes for product reviews.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read webhook deliveries.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a product review.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to create a new product review.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to update a product review.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to delete a product review.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access batch create, update and delete items.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return boolean|WP_Error
         */
        public function batch_items_permissions_check($request)
        {
        }
        /**
         * Get all reviews.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Create a single review.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Get a single product review.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Updates a review.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response Response object on success, or error object on failure.
         */
        public function update_item($request)
        {
        }
        /**
         * Deletes a review.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response Response object on success, or error object on failure.
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare a single product review output for response.
         *
         * @param WP_Comment      $review Product review object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($review, $request)
        {
        }
        /**
         * Prepare a single product review to be inserted into the database.
         *
         * @param  WP_REST_Request $request Request object.
         * @return array|WP_Error  $prepared_review
         */
        protected function prepare_item_for_database($request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WP_Comment $review Product review object.
         * @return array Links for the given product review.
         */
        protected function prepare_links($review)
        {
        }
        /**
         * Get the Product Review's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get the reivew, if the ID is valid.
         *
         * @since 3.5.0
         * @param int $id Supplied ID.
         * @return WP_Comment|WP_Error Comment object if ID is valid, WP_Error otherwise.
         */
        protected function get_review($id)
        {
        }
        /**
         * Prepends internal property prefix to query parameters to match our response fields.
         *
         * @since 3.5.0
         * @param string $query_param Query parameter.
         * @return string
         */
        protected function normalize_query_param($query_param)
        {
        }
        /**
         * Checks comment_approved to set comment status for single comment output.
         *
         * @since 3.5.0
         * @param string|int $comment_approved comment status.
         * @return string Comment status.
         */
        protected function prepare_status_response($comment_approved)
        {
        }
        /**
         * Sets the comment_status of a given review object when creating or updating a review.
         *
         * @since 3.5.0
         * @param string|int $new_status New review status.
         * @param int        $id         Review ID.
         * @return bool Whether the status was changed.
         */
        protected function handle_status_param($new_status, $id)
        {
        }
    }
    /**
     * REST API Product Shipping Classes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Shipping_Classes_V2_Controller
     */
    class WC_REST_Product_Shipping_Classes_Controller extends \WC_REST_Product_Shipping_Classes_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Reports controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Reports_V2_Controller
     */
    class WC_REST_Reports_Controller extends \WC_REST_Reports_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Get reports list.
         *
         * @since 3.5.0
         * @return array
         */
        protected function get_reports()
        {
        }
    }
    /**
     * REST API Reports Coupons Totals controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Reports_Controller
     */
    class WC_REST_Report_Coupons_Totals_Controller extends \WC_REST_Reports_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/coupons/totals';
        /**
         * Get reports list.
         *
         * @since 3.5.0
         * @return array
         */
        protected function get_reports()
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param  stdClass        $report Report data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Reports Customers Totals controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Reports_Controller
     */
    class WC_REST_Report_Customers_Totals_Controller extends \WC_REST_Reports_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/customers/totals';
        /**
         * Get reports list.
         *
         * @since 3.5.0
         * @return array
         */
        protected function get_reports()
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param  stdClass        $report Report data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Reports Orders Totals controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Reports_Controller
     */
    class WC_REST_Report_Orders_Totals_Controller extends \WC_REST_Reports_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/orders/totals';
        /**
         * Get reports list.
         *
         * @since 3.5.0
         * @return array
         */
        protected function get_reports()
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param  stdClass        $report Report data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Reports Products Totals controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Reports_Controller
     */
    class WC_REST_Report_Products_Totals_Controller extends \WC_REST_Reports_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/products/totals';
        /**
         * Get reports list.
         *
         * @since 3.5.0
         * @return array
         */
        protected function get_reports()
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param  stdClass        $report Report data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Reports Reviews Totals controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Reports_Controller
     */
    class WC_REST_Report_Reviews_Totals_Controller extends \WC_REST_Reports_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/reviews/totals';
        /**
         * Get reports list.
         *
         * @since 3.5.0
         * @return array
         */
        protected function get_reports()
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param  stdClass        $report Report data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Report Sales controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Report_Sales_V2_Controller
     */
    class WC_REST_Report_Sales_Controller extends \WC_REST_Report_Sales_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Report Top Sellers controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Report_Top_Sellers_V2_Controller
     */
    class WC_REST_Report_Top_Sellers_Controller extends \WC_REST_Report_Top_Sellers_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Setting Options controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Setting_Options_V2_Controller
     */
    class WC_REST_Setting_Options_Controller extends \WC_REST_Setting_Options_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Get setting data.
         *
         * @param string $group_id Group ID.
         * @param string $setting_id Setting ID.
         * @return stdClass|WP_Error
         */
        public function get_setting($group_id, $setting_id)
        {
        }
        /**
         * Callback for allowed keys for each setting response.
         *
         * @param  string $key Key to check.
         * @return boolean
         */
        public function allowed_setting_keys($key)
        {
        }
        /**
         * Get all settings in a group.
         *
         * @param string $group_id Group ID.
         * @return array|WP_Error
         */
        public function get_group_settings($group_id)
        {
        }
        /**
         * Returns a list of countries and states for use in the base location setting.
         *
         * @since  3.0.7
         * @return array Array of states and countries.
         */
        private function get_countries_and_states()
        {
        }
        /**
         * Get the settings schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Settings controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Settings_V2_Controller
     */
    class WC_REST_Settings_Controller extends \WC_REST_Settings_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Makes sure the current user has access to WRITE the settings APIs.
         *
         * @param WP_REST_Request $request Full data about the request.
         * @return WP_Error|bool
         */
        public function update_items_permissions_check($request)
        {
        }
        /**
         * Update a setting.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Get the groups schema, conforming to JSON Schema.
         *
         * @since  3.0.0
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * Shipping methods controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Shipping_Methods_V2_Controller
     */
    class WC_REST_Shipping_Methods_Controller extends \WC_REST_Shipping_Methods_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Shipping Zone Locations class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Shipping_Zone_Locations_V2_Controller
     */
    class WC_REST_Shipping_Zone_Locations_Controller extends \WC_REST_Shipping_Zone_Locations_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Shipping Zone Methods class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Shipping_Zone_Methods_V2_Controller
     */
    class WC_REST_Shipping_Zone_Methods_Controller extends \WC_REST_Shipping_Zone_Methods_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Shipping Zones class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Shipping_Zones_V2_Controller
     */
    class WC_REST_Shipping_Zones_Controller extends \WC_REST_Shipping_Zones_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * System status controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_System_Status_V2_Controller
     */
    class WC_REST_System_Status_Controller extends \WC_REST_System_Status_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * System status tools controller.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_System_Status_Tools_V2_Controller
     */
    class WC_REST_System_Status_Tools_Controller extends \WC_REST_System_Status_Tools_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Tax Classes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Tax_Classes_V2_Controller
     */
    class WC_REST_Tax_Classes_Controller extends \WC_REST_Tax_Classes_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Taxes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Taxes_V2_Controller
     */
    class WC_REST_Taxes_Controller extends \WC_REST_Taxes_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Webhooks controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Webhooks_V2_Controller
     */
    class WC_REST_Webhooks_Controller extends \WC_REST_Webhooks_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Get the default REST API version.
         *
         * @since  3.0.0
         * @return string
         */
        protected function get_default_api_version()
        {
        }
    }
}
namespace Automattic\WooCommerce\RestApi {
    /**
     * Main package class.
     */
    class Package
    {
        /**
         * Version.
         *
         * @var string
         */
        const VERSION = '1.0.2';
        /**
         * Init the package - load the REST API Server class.
         */
        public static function init()
        {
        }
        /**
         * Return the version of the package.
         *
         * @return string
         */
        public static function get_version()
        {
        }
        /**
         * Return the path to the package.
         *
         * @return string
         */
        public static function get_path()
        {
        }
    }
}
namespace Automattic\WooCommerce\RestApi\Utilities {
    /**
     * Singleton trait.
     */
    trait SingletonTrait
    {
        /**
         * The single instance of the class.
         *
         * @var object
         */
        protected static $instance = null;
        /**
         * Constructor
         *
         * @return void
         */
        protected function __construct()
        {
        }
        /**
         * Get class instance.
         *
         * @return object Instance.
         */
        public static final function instance()
        {
        }
        /**
         * Prevent cloning.
         */
        private function __clone()
        {
        }
        /**
         * Prevent unserializing.
         */
        private function __wakeup()
        {
        }
    }
}
namespace Automattic\WooCommerce\RestApi {
    /**
     * Class responsible for loading the REST API and all REST API namespaces.
     */
    class Server
    {
        use \Automattic\WooCommerce\RestApi\Utilities\SingletonTrait;
        /**
         * REST API namespaces and endpoints.
         *
         * @var array
         */
        protected $controllers = [];
        /**
         * Hook into WordPress ready to init the REST API as needed.
         */
        public function init()
        {
        }
        /**
         * Register REST API routes.
         */
        public function register_rest_routes()
        {
        }
        /**
         * Get API namespaces - new namespaces should be registered here.
         *
         * @return array List of Namespaces and Main controller classes.
         */
        protected function get_rest_namespaces()
        {
        }
        /**
         * List of controllers in the wc/v1 namespace.
         *
         * @return array
         */
        protected function get_v1_controllers()
        {
        }
        /**
         * List of controllers in the wc/v2 namespace.
         *
         * @return array
         */
        protected function get_v2_controllers()
        {
        }
        /**
         * List of controllers in the wc/v3 namespace.
         *
         * @return array
         */
        protected function get_v3_controllers()
        {
        }
    }
}
namespace Automattic\WooCommerce\RestApi\Utilities {
    /**
     * ImageAttachment class.
     */
    class ImageAttachment
    {
        /**
         * Attachment ID.
         *
         * @var integer
         */
        public $id = 0;
        /**
         * Object attached to.
         *
         * @var integer
         */
        public $object_id = 0;
        /**
         * Constructor.
         *
         * @param integer $id Attachment ID.
         * @param integer $object_id Object ID.
         */
        public function __construct($id = 0, $object_id = 0)
        {
        }
        /**
         * Upload an attachment file.
         *
         * @throws \WC_REST_Exception REST API exceptions.
         * @param string $src URL to file.
         */
        public function upload_image_from_src($src)
        {
        }
        /**
         * Update attachment alt text.
         *
         * @param string $text Text to set.
         */
        public function update_alt_text($text)
        {
        }
        /**
         * Update attachment name.
         *
         * @param string $text Text to set.
         */
        public function update_name($text)
        {
        }
    }
}