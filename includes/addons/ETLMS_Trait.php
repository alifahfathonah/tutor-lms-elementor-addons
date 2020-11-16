<?php

namespace TutorLMS\Elementor\Addons;

trait ETLMS_Trait {
	
	/**
	 * default_layout optional default value left 
	 * @return return layout options for left,up
	 */
	public function etlms_layout($default_layout = 'left') {
		return [
			'label' => __('Layout', 'tutor-elementor-addons'),
			'type' => \Elementor\Controls_Manager::CHOOSE,
			'options' => [
				'left' => [
					'title' => __('Left', 'tutor-elementor-addons'),
					'icon' => 'fa fa-long-arrow-left',
				],
				'up' => [
					'title' => __('Up', 'tutor-elementor-addons'),
					'icon' => 'fa fa-long-arrow-up'
				]

			],
			'prefix_class' => self::$prefix_class_layout . '%s',
			'default' => $default_layout,

			'toggle' => false
		];
	}

	/**
	 * default_layout optional default value left 
	 * @return layout options for left,right,center
	 */
	public function etlms_alignment($default_alignment = 'left') {
		return [
			'label'        => __('Alignment', 'tutor-elementor-addons'),
			'type'         => \Elementor\Controls_Manager::CHOOSE,
			'options'      => [
				'left'   => [
					'title' => __('Left', 'tutor-elementor-addons'),
					'icon'  => 'fa fa-align-left',
				],
				'center' => [
					'title' => __('Center', 'tutor-elementor-addons'),
					'icon'  => 'fa fa-align-center',
				],
				'right'  => [
					'title' => __('Right', 'tutor-elementor-addons'),
					'icon'  => 'fa fa-align-right'
				]
			],
			'prefix_class' => self::$prefix_class_alignment . '%s',
			'default'      => $default_alignment,
		];
	}

	//icon left right alignment
	public function etlms_icon_align($prefix_class, $default_layout = 'left') {
		return [
			'label' => __('Alignment', 'tutor-elementor-addons'),
			'type' => \Elementor\Controls_Manager::CHOOSE,
			'options' => [
				'left' => [
					'title' => __('Left', 'tutor-elementor-addons'),
					'icon' => 'fa fa-long-arrow-left',
				],
				'right' => [
					'title' => __('Right', 'tutor-elementor-addons'),
					'icon' => 'fa fa-long-arrow-up'
				]

			],
			'prefix_class' => $prefix_class . '%s',
			'default' => $default_layout,

			'toggle' => false
		];
	}

	public function etlms_align_with_justify($default_alignment = 'left') {
		return [
			'label'        => __('Alignment', 'tutor-elementor-addons'),
			'type'         => \Elementor\Controls_Manager::CHOOSE,
			'options'      => [
				'left'   => [
					'title' => __('Left', 'tutor-elementor-addons'),
					'icon'  => 'fa fa-align-left',
				],
				'center' => [
					'title' => __('Center', 'tutor-elementor-addons'),
					'icon'  => 'fa fa-align-center',
				],
				'right'  => [
					'title' => __('Right', 'tutor-elementor-addons'),
					'icon'  => 'fa fa-align-right'
				],
				'justify'  => [
					'title' => __('Justified', 'tutor-elementor-addons'),
					'icon'  => 'fa fa-align-justify'
				]
			],
			'prefix_class' => self::$prefix_class_alignment . '%s',
			'default'      => $default_alignment
		];
	}

	public function etlms_non_responsive_layout($default_layout = 'left') {
		return [
			'label' => __('Layout', 'tutor-elementor-addons'),
			'type' => \Elementor\Controls_Manager::CHOOSE,
			'options' => [
				'left' => [
					'title' => __('Left', 'tutor-elementor-addons'),
					'icon' => 'fa fa-long-arrow-left',
				],
				'up' => [
					'title' => __('Center', 'tutor-elementor-addons'),
					'icon' => 'fa fa-long-arrow-up'
				]

			],
			'prefix_class' => self::$prefix_class_layout,
			'default' => $default_layout,

			'toggle' => false
		];
	}

	public function etlms_non_responsive_alignment($default_alignment = 'left') {
		return [
			'label'        => __('Alignment', 'tutor-elementor-addons'),
			'type'         => \Elementor\Controls_Manager::CHOOSE,
			'options'      => [
				'left'   => [
					'title' => __('Left', 'tutor-elementor-addons'),
					'icon'  => 'fa fa-align-left',
				],
				'center' => [
					'title' => __('Center', 'tutor-elementor-addons'),
					'icon'  => 'fa fa-align-center',
				],
				'right'  => [
					'title' => __('Right', 'tutor-elementor-addons'),
					'icon'  => 'fa fa-align-right'
				]
			],
			'prefix_class' => self::$prefix_class_alignment,
			'default'      => $default_alignment
		];
	}
}
