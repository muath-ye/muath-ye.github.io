<?php
/**
 * Muath Ahmed Assawadi
 * +967777643646
 * muathye@gmail.com
 * https://github/muath-ye
 * 101110010110011110011001111110
 * !*!!!**!*!!**!!!!**!!**!!!!!!*
 */
namespace Muath;

use Muath\ScientialQualifications;
use Muath\Courses;
use Muath\Experiences;
use Muath\Skills;
use Muath\SpeakingLanguages;

class Resume
{
    // Sciential Qualifications
    public function scientialQualifications()
    {
        $qualifications = array();
        
        $qualifications[] = ScientialQualifications::BachelorDegree([
            "Degree Name"       => "Information Technology & Computer Science",
            "Qualifier Name"    => "Sana'a University - Information Technology & Computer Science",
            "Date"              => "April, 2014 - June, 2018",
            "Qualifier Address" => "Sana'a - Yemen",
        ]);

        $qualifications[] = ScientialQualifications::SecondarySchool([
            "Degree Name"       => "Sciential Section General Secondary School",
            "Qualifier Name"    => "Al-Kuwait Secondary School",
            "Date"              => "March, 2009 - May, 2012",
            "Qualifier Address" => "Sana'a - Yemen",
        ]);

        return $qualifications;
    }
    
    // Courses
    public function courses()
    {
        $courses = array();
        
        $courses[] = Courses::englishDiploma([
            "Degree Name"       => "Intermediate English Diploma",
            "Qualifier Name"    => "Canadian Training Center",
            "Date"              => "April, 2012 - August, 2012",
            "Qualifier Address" => "Sana'a - Yemen",
        ]);

        $courses[] = Courses::accounting([
            "Degree Name"       => "Accounting for Non-accountant Diploma",
            "Qualifier Name"    => "Ministry of Adult and Sport",
            "Date"              => "Feb, 2013 - March, 2013",
            "Qualifier Address" => "Sana'a - Yemen",
        ]);

        $courses[] = Courses::graphics([
            "Degree Name"       => "Graphics (PhotoShop - Illustrator - InDesign) Diploma",
            "Qualifier Name"    => "Ministry of Adult and Sport",
            "Date"              => "March, 2014 - May, 2014",
            "Qualifier Address" => "Sana'a - Yemen",
        ]);

        $courses[] = Courses::montage([
            "Degree Name"       => "Montage (Premier - AfterEffect) Diploma",
            "Qualifier Name"    => "Ministry of Adult and Sport",
            "Date"              => "August, 2016 - September, 2016",
            "Qualifier Address" => "Sana'a - Yemen",
        ]);

        $courses[] = "And more courses, events and associations from April, 2011 till now.";

        return $courses;
    }

    // Experiences
    public function experiences()
    {
        $experiences = array();
        
        $experiences[] = Experiences::infiniteCloud([
            "Company Name"    => "InfiniteCloud",
            "Company Website" => "https://infinitecloud.co",
            "Date"            => "December, 2018 - now",
            "Company Address" => "Sana'a - Yemen",
        ]);

        return $experiences;
    }

    // Skills
    public function skills()
    {
        $skills = array();
        
        $skills[] = Skills::someSkills([
            "PHP Language",
            "Laravel Framework",
            "Api Development",
            "JavaScript Language",
            "VueJs Framework",
            "Bootstrap Library",
            "Jquery Library",
            "Git VCS",
            "Github",
            "WordPress",
            "Windows Server",
            "Hosting Administration" => [
                "Shared",
                "VPS",
                "Dedicated",
            ],
            "Adobe" => [
                "XD",
                "PhotoShop",
                "Illustrator",
                "InDesign",
                "Premier",
                "After Effect",
            ],
            "MS Office"
        ]);

        return $skills;
    }

    // Speaking Languages
    public function speakingLanguages()
    {
        $languages = array();
        
        $languages[] = SpeakingLanguages::languages([
            "Arabic"  => "Native Language",
            "English" => "Well Experienced",
            "Germany" => "Beginner",
        ]);

        return $languages;
    }
}