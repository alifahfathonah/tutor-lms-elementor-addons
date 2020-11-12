<?php
/**
 * Course About
 * @since 1.0.0
 */

namespace TutorLMS\Elementor\Addons;

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class CourseAbout extends BaseAddon {

    use ETLMS_Trait;

    private static $prefix_class_layout = "elementor-layout-";

    private static $prefix_class_alignment = "elementor-align-"; 

    public function get_title() {
        return __('Course About', 'tutor-elementor-addons');
    }

    protected function register_content_controls(){

        $this->start_controls_section(
            'course_about_content_section',
            [
                'label' => 'General Settings',
                'tab' => Controls_Manager::TAB_CONTENT
            ]
        );
                  
        $this->add_responsive_control(
            'course_about_align',
            $this->etlms_align_with_justify()
        );

        $this->end_controls_section();
    }
    
    protected function register_style_controls() {
        $paragraph_selector = '{{WRAPPER}} .etlms-course-excerpt';
        $heading_selector = '{{WRAPPER}} .etlms-course-summery >h4';

        /* Heading Section */
        $this->start_controls_section(
            'course_about_heading_section',
            [
                'label' => __('Heading', 'tutor-elementor-addons'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'course_about_heading_color',
            [
                'label'     => __('Color', 'tutor-elementor-addons'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
					$heading_selector => 'color: {{VALUE}}',
				],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'      => 'course_about_heading_typo',
                'label'     => __('Typography', 'tutor-elementor-addons'),
                'selector'  => $heading_selector,
            ]
        );
        $this->end_controls_section();

        /* Paragraph  Section */
        $this->start_controls_section(
            'course_about_paragraph_section',
            [
                'label' => __('Paragraph', 'tutor-elementor-addons'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'course_about_paragraph_color',
            [
                'label'     => __('Color', 'tutor-elementor-addons'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
					$paragraph_selector => 'color: {{VALUE}}',
				],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'      => 'course_about_paragraph_typo',
                'label'     => __('Typography', 'tutor-elementor-addons'),
                'selector'  => $paragraph_selector,
            ]
        );
        $this->end_controls_section();
    }

    protected function render($instance = []) {
        ob_start();
        $course = etlms_get_course();
        if ($course) {
            include_once etlms_get_template('course/about');
        }
        echo ob_get_clean();
    }
}
