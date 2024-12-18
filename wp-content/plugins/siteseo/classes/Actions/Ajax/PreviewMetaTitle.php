<?php
/*
* SiteSEO
* https://siteseo.io/
* (c) SiteSEO Team <support@siteseo.io>
*/

/*
Copyright 2016 - 2024 - Benjamin Denis  (email : contact@seopress.org)
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

namespace SiteSEO\Actions\Ajax;

if ( ! defined('ABSPATH')) {
	exit;
}

use SiteSEO\Core\Hooks\ExecuteHooksBackend;

class PreviewMetaTitle implements ExecuteHooksBackend {
	/**
	 * @since 4.4.0
	 *
	 * @return void
	 */
	public function hooks() {
		add_action('wp_ajax_get_preview_meta_title', [$this, 'get']);
	}

	/**
	 * @since 4.4.0
	 *
	 * @return array
	 */
	public function get() {
		if ( ! isset($_GET['template'])) {
			wp_send_json_error();

			return;
		}

		$template	= sanitize_textarea_field(wp_unslash($_GET['template']));
		$postId	  = isset($_GET['post_id']) ? (int) siteseo_opt_get('post_id') : null;
		$homeId	  = isset($_GET['home_id']) ? (int) siteseo_opt_get('home_id') : null;
		$termId	  = isset($_GET['term_id']) ? (int) siteseo_opt_get('term_id') : null;

		$contextPage = siteseo_get_service('ContextPage')->buildContextWithCurrentId((int) siteseo_opt_get('post_id'));
		if ($postId) {
			$contextPage->setPostById((int) siteseo_opt_get('post_id'));
			$contextPage->setIsSingle(true);

			$terms = get_the_terms($postId, 'post_tag');

			if ( ! empty($terms)) {
				$contextPage->setHasTag(true);
			}

			$categories = get_the_terms($postId, 'category');
			if ( ! empty($categories)) {
				$contextPage->setHasCategory(true);
			}
		}

		if ($postId === $homeId && null !== $homeId) {
			$contextPage->setIsHome(true);
		}

		if ($postId === $termId && null !== $termId) {
			$contextPage->setIsCategory(true);
			$contextPage->setTermId($termId);
		}

		$value   = siteseo_get_service('TagsToString')->replace($template, $contextPage->getContext());

		wp_send_json_success($value);
	}
}
