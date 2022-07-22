<?php

use App\Course;
use App\Department;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run()
    {
        //General courses
        Course::create([
            'code' => 'ACCT 112',
            'name' => 'Principles of Accounting I',
            'credits' => 3,
        ])->departments()->attach([1, 2, 3, 4, 5, 6, 7]);
        Course::create([
            'code' => 'EDRM 113',
            'name' => 'Study and Research Methods',
            'credits' => 2,
        ])->departments()->attach([1, 2, 3, 4, 5, 6, 7]);
        Course::create([
            'code' => 'ENGL 114',
            'name' => 'English Grammar',
            'credits' => 3,
        ])->departments()->attach([1, 2, 3, 4, 5, 6, 7]);
        Course::create([
            'code' => 'RELB 116',
            'name' => 'Introduction to Bible Study',
            'credits' => 2,
        ])->departments()->attach([1, 2, 3, 4, 5, 6, 7]);
        Course::create([
            'code' => 'STAT 122',
            'name' => 'Descriptive Statistics',
            'credits' => 3,
        ])->departments()->attach([1, 2, 3, 4, 5, 6, 7]);
        Course::create([
            'code' => 'ENGL 128',
            'name' => 'English Writing Skills',
            'credits' => 3,
        ])->departments()->attach([1, 2, 3, 4, 5, 6, 7]);
        Course::create([
            'code' => 'RELT 123',
            'name' => 'Bible Doctrines',
            'credits' => 3,
        ])->departments()->attach([1, 2, 3, 4, 5, 6, 7]);
        Course::create([
            'code' => 'ENGL 219',
            'name' => 'English Speaking Skills',
            'credits' => 3,
        ])->departments()->attach([1, 2, 3, 4, 5, 6, 7]);
        Course::create([
            'code' => 'HELT 213',
            'name' => 'Health Principles',
            'credits' => 2,
        ])->departments()->attach([1, 2, 3, 4, 5, 6, 7]);
        Course::create([
            'code' => 'RELT 221',
            'name' => 'Philosophy, Science and Religion',
            'credits' => 2,
        ])->departments()->attach([1, 2, 3, 4, 5, 6, 7]);
        Course::create([
            'code' => 'ENGL 227',
            'name' => 'English Phonology',
            'credits' => 3,
        ])->departments()->attach([1, 2, 3, 4, 5, 6, 7]);
        Course::create([
            'code' => 'INSY	422',
            'name' => 'Internship',
            'credits' => 4,
        ])->departments()->attach([1, 2, 3, 4, 5, 6, 7]);
        Course::create([
            'code' => 'INSY 421',
            'name' => 'Research Project',
            'credits' => 6,
        ])->departments()->attach([1, 2, 3, 4, 5, 6, 7]);
        //IT General courses
        Course::create([
            'code' => 'MATH	101',
            'name' => 'Applied Mathematics',
            'credits' => 3
        ])->departments()->attach([1, 2, 3]);
        Course::create([
            'code' => 'STAT	225',
            'name' => 'Probability and Statistics',
            'credits' => 2
        ])->departments()->attach([1, 2, 3]);
        Course::create([
            'code' => 'INSY	212',
            'name' => 'Database Management Systems',
            'credits' => 3
        ])->departments()->attach([1, 2, 3]);
        Course::create([
            'code' => 'INSY	117',
            'name' => 'Introduction to Information Mgt.',
            'credits' => 3
        ])->departments()->attach([1, 2, 3]);
        Course::create([
            'code' => 'INSY	314',
            'name' => 'Database Development PL/SQL',
            'credits' => 4
        ])->departments()->attach([1, 2, 3]);
        Course::create([
            'code' => 'INSY	223',
            'name' => 'Programming With C',
            'credits' => 4
        ])->departments()->attach([1, 2, 3]);
        Course::create([
            'code' => 'INSY	214',
            'name' => 'Computer Maintenance',
            'credits' => 4
        ])->departments()->attach([1, 2, 3]);
        Course::create([
            'code' => 'INSY	216',
            'name' => 'Algorithms',
            'credits' => 4
        ])->departments()->attach([1, 2, 3]);
        Course::create([
            'code' => 'INSY	323',
            'name' => 'Object Oriented Programming in C + +',
            'credits' => 5
        ])->departments()->attach([1, 2, 3]);
        Course::create([
            'code' => 'INSY	318',
            'name' => 'Data Structures',
            'credits' => 5
        ])->departments()->attach([1, 2, 3]);
        Course::create([
            'code' => 'INSY	411',
            'name' => 'Computer Networks',
            'credits' => 4
        ])->departments()->attach([1, 2, 3]);
        Course::create([
            'code' => 'INSY	423',
            'name' => 'Dot Net',
            'credits' => 4
        ])->departments()->attach([1, 2, 3]);
        Course::create([
            'code' => 'INSY 413',
            'name' => 'Web Technologies and Internet',
            'credits' => 4
        ])->departments()->attach([1, 2, 3]);
        Course::create([
            'code' => 'INSY	322',
            'name' => 'Operating System',
            'credits' => 4
        ])->departments()->attach([1, 2, 3]);
        Course::create([
            'code' => 'MATH	127',
            'name' => 'Digital Computer Fundamentals',
            'credits' => 4
        ])->departments()->attach([1, 2, 3]);
        Course::create([
            'code' => 'INSY	321',
            'name' => 'Software Engineering',
            'credits' => 3
        ])->departments()->attach([1, 2, 3]);
        //Information Management courses
        Course::create([
            'code' => 'ACCT	224',
            'name' => 'Intermediate Accounting II',
            'credits' => 3
        ])->departments()->attach([1, 6, 7]);
        Course::create([
            'code' => 'MGMT	321',
            'name' => 'Change and Innovation Management',
            'credits' => 3
        ])->departments()->attach([1, 6]);
        Course::create([
            'code' => 'BSAD	432',
            'name' => 'Strategic Management',
            'credits' => 3
        ])->departments()->attach([1, 6]);
        // //Networks and Communication Systems courses
        Course::create([
            'code' => 'COSC	413',
            'name' => 'Multimedia Computing',
            'credits' => 3
        ])->departments()->attach(2);
        Course::create([
            'code' => 'ELEC	212',
            'name' => 'Electronic Devices & Circuits',
            'credits' => 3
        ])->departments()->attach(2);
        Course::create([
            'code' => 'COSC	313',
            'name' => 'Network Programming (TCP/IP)',
            'credits' => 3
        ])->departments()->attach(2);
        Course::create([
            'code' => 'COSC	415',
            'name' => 'Mobile Communication',
            'credits' => 3
        ])->departments()->attach(2);
        Course::create([
            'code' => 'COSC	412',
            'name' => 'Network Administration',
            'credits' => 3
        ])->departments()->attach(2);
        Course::create([
            'code' => 'COSC	323',
            'name' => 'Routing and Switching',
            'credits' => 3
        ])->departments()->attach(2);
        Course::create([
            'code' => 'COSC	414',
            'name' => 'Web Design',
            'credits' => 2
        ])->departments()->attach([2, 3, 5]);
        // //Software Engineering courses
        Course::create([
            'code' => 'MATH 128',
            'name' => 'Multivariable Calculus',
            'credits' => 3
        ])->departments()->attach(3);
        Course::create([
            'code' => 'SENG 414',
            'name' => 'Advanced Software Modeling',
            'credits' => 4
        ])->departments()->attach(3);
        Course::create([
            'code' => 'SENG 224',
            'name' => 'Theory of Computation',
            'credits' => 3
        ])->departments()->attach(3);
        Course::create([
            'code' => 'SENG 322',
            'name' => 'Software Testing Techniques',
            'credits' => 3
        ])->departments()->attach(3);
        Course::create([
            'code' => 'SENG 325',
            'name' => 'Requirements Engineering',
            'credits' => 3
        ])->departments()->attach(3);
        Course::create([
            'code' => 'SENG 412',
            'name' => 'Software Project Management',
            'credits' => 3
        ])->departments()->attach(3);
        Course::create([
            'code' => 'SENG 421',
            'name' => 'Software Security',
            'credits' => 3
        ])->departments()->attach(3);
        Course::create([
            'code' => 'SENG 422',
            'name' => 'Best Programming Practices',
            'credits' => 3
        ])->departments()->attach(3);
        //Business Administration General Courses
        Course::create([
            'code' => 'MGMT	127',
            'name' => 'Principles of Management',
            'credits' => 3
        ])->departments()->attach([1, 4, 6, 7]);
        Course::create([
            'code' => 'MATH	111',
            'name' => 'Business Mathematics',
            'credits' => 3
        ])->departments()->attach([4, 6, 7]);
        Course::create([
            'code' => 'ACCT	126',
            'name' => 'Principles of Accounting II',
            'credits' => 3
        ])->departments()->attach([1, 4, 6, 7]);
        Course::create([
            'code' => 'ECON	217',
            'name' => 'Microeconomics',
            'credits' => 3
        ])->departments()->attach([4, 6, 7]);
        Course::create([
            'code' => 'MKGT	227',
            'name' => 'Principles of Marketing',
            'credits' => 3
        ])->departments()->attach([4, 6, 7]);
        Course::create([
            'code' => 'BSAD	315',
            'name' => 'Human Resource Management',
            'credits' => 3
        ])->departments()->attach([4, 6, 7]);
        Course::create([
            'code' => 'ECON	225',
            'name' => 'Macroeconomics',
            'credits' => 3
        ])->departments()->attach([4, 6, 7]);
        Course::create([
            'code' => 'BSAD	214',
            'name' => 'Business Law I',
            'credits' => 3
        ])->departments()->attach([4, 6, 7]);
        Course::create([
            'code' => 'BSAD	223',
            'name' => 'Business Law II',
            'credits' => 2
        ])->departments()->attach([4, 6, 7]);
        Course::create([
            'code' => 'BSAD	222',
            'name' => 'Business Communication',
            'credits' => 3
        ])->departments()->attach([4, 6, 7]);
        Course::create([
            'code' => 'STAT	216',
            'name' => 'Inferential  Statistics',
            'credits' => 3
        ])->departments()->attach([4, 6, 7]);
        Course::create([
            'code' => 'INSY	226',
            'name' => 'Management Information System',
            'credits' => 3
        ])->departments()->attach([2, 4, 6, 7]);
        Course::create([
            'code' => 'BSAD	322',
            'name' => 'Business Research Method',
            'credits' => 3
        ])->departments()->attach([4, 6, 7]);
        Course::create([
            'code' => 'ACCT	324',
            'name' => 'Managerial Accounting',
            'credits' => 3
        ])->departments()->attach([4, 6, 7]);
        Course::create([
            'code' => 'BSAD	413',
            'name' => 'Financial Management',
            'credits' => 3
        ])->departments()->attach([1, 4, 6, 7]);
        Course::create([
            'code' => 'BSAD	325',
            'name' => 'Project Management',
            'credits' => 3
        ])->departments()->attach([4, 6, 7]);
        Course::create([
            'code' => 'BSAD	314',
            'name' => 'Entrepreneurship',
            'credits' => 3
        ])->departments()->attach([4, 6, 7]);
        Course::create([
            'code' => 'BSAD	415',
            'name' => 'Production and Operation Management',
            'credits' => 3
        ])->departments()->attach([1, 4, 6, 7]);
        Course::create([
            'code' => 'BSAD	414',
            'name' => 'Organizational Behavior',
            'credits' => 3
        ])->departments()->attach([4, 6, 7]);
        Course::create([
            'code' => 'BSAD	412',
            'name' => 'Business Ethics',
            'credits' => 3
        ])->departments()->attach([4, 6, 7]);
        Course::create([
            'code' => 'BSAD	423',
            'name' => 'Strategic Management',
            'credits' => 3
        ])->departments()->attach([4, 6, 7]);
        // //Management courses
        Course::create([
            'code' => 'ACCT	214	',
            'name' => 'Intermediate    Accounng    I',
            'credits' => 3
        ])->departments()->attach([4, 5]);
        Course::create([
            'code' => 'MGMT	224',
            'name' => 'Legal and Social Environment of Business',
            'credits' => 3
        ])->departments()->attach(4);
        Course::create([
            'code' => 'MGMT	313',
            'name' => 'Management   Theory',
            'credits' => 3
        ])->departments()->attach(4);
        Course::create([
            'code' => 'MGMT	316',
            'name' => 'Risk/Insurance  Management',
            'credits' => 3
        ])->departments()->attach(4);
        Course::create([
            'code' => 'MGMT	323',
            'name' => 'Change and Innovation Management',
            'credits' => 3
        ])->departments()->attach(4);
        Course::create([
            'code' => 'MGMT	326',
            'name' => 'Interna4onal Business Management',
            'credits' => 3
        ])->departments()->attach(4);
        Course::create([
            'code' => 'MGMT	327',
            'name' => 'Performance Management',
            'credits' => 3
        ])->departments()->attach(4);
        Course::create([
            'code' => 'MGMT	411',
            'name' => 'Business Organiza4on and Management',
            'credits' => 3
        ])->departments()->attach(4);
        Course::create([
            'code' => 'MGMT	417',
            'name' => 'Total Quality Management',
            'credits' => 3
        ])->departments()->attach(4);
        Course::create([
            'code' => 'MGMT	421',
            'name' => 'Leadership',
            'credits' => 3
        ])->departments()->attach(4);
        // //Marketing courses
        Course::create([
            'code' => 'MKTG	226',
            'name' => 'Consumer Behavior',
            'credits' => 3
        ])->departments()->attach(5);
        Course::create([
            'code' => 'FNCE	318',
            'name' => 'Investment Analysis and Portfolio Management',
            'credits' => 3
        ])->departments()->attach([4, 5]);
        Course::create([
            'code' => 'MKTG	316',
            'name' => 'E-­Marketing',
            'credits' => 2
        ])->departments()->attach(5);
        Course::create([
            'code' => 'MKTG	317',
            'name' => 'Principles and Practices of Retaining and Wholesaling',
            'credits' => 3
        ])->departments()->attach(5);
        Course::create([
            'code' => 'MKTG	325',
            'name' => 'International  Marketing',
            'credits' => 3
        ])->departments()->attach(5);
        Course::create([
            'code' => 'MKTG	326',
            'name' => 'Sales  Management',
            'credits' => 3
        ])->departments()->attach(5);
        Course::create([
            'code' => 'MKTG	327',
            'name' => 'Industrial Marketing',
            'credits' => 3
        ])->departments()->attach(5);
        Course::create([
            'code' => 'MKTG	416',
            'name' => 'Strategic  Marketing',
            'credits' => 3
        ])->departments()->attach(5);
        Course::create([
            'code' => 'MKTG	418',
            'name' => 'Advertising and Promotion',
            'credits' => 3
        ])->departments()->attach(5);
        Course::create([
            'code' => 'MKTG	424',
            'name' => 'Distribution, Logistics, and Pricing Management',
            'credits' => 3
        ])->departments()->attach(5);
        // //Finance courses
        Course::create([
            'code' => 'ACCT	219',
            'name' => 'Intermediate Accounting I',
            'credits' => 3
        ])->departments()->attach(6);
        Course::create([
            'code' => 'ACCT 229',
            'name' => 'Intermediate Accounting II',
            'credits' => 3
        ])->departments()->attach(6);
        Course::create([
            'code' => 'FNCE	311',
            'name' => 'Principles of Finance',
            'credits' => 3
        ])->departments()->attach(6);
        Course::create([
            'code' => 'FNCE	312',
            'name' => 'Financial Market Institution',
            'credits' => 3
        ])->departments()->attach(6);
        Course::create([
            'code' => 'FNCE	313',
            'name' => 'Investment',
            'credits' => 3
        ])->departments()->attach(6);
        Course::create([
            'code' => 'FNCE	321',
            'name' => 'Investment Analysis and Portfolio Management',
            'credits' => 3
        ])->departments()->attach(6);
        Course::create([
            'code' => 'ACCT	328',
            'name' => 'Taxation',
            'credits' => 3
        ])->departments()->attach(6);
        Course::create([
            'code' => 'FNCE	329',
            'name' => 'Money and Banking',
            'credits' => 3
        ])->departments()->attach(6);
        Course::create([
            'code' => 'FNCE	411',
            'name' => 'Intermediate Corporate Finance',
            'credits' => 3
        ])->departments()->attach(6);
        Course::create([
            'code' => 'FNCE	412',
            'name' => 'Advanced Corporate',
            'credits' => 3
        ])->departments()->attach(6);
        Course::create([
            'code' => 'ACCT	428',
            'name' => 'Management of Financial Institutions',
            'credits' => 3
        ])->departments()->attach(6);
        // //Accounting courses
        Course::create([
            'code' => 'ACCT	215',
            'name' => 'Intermediate Accounting I',
            'credits' => 3
        ])->departments()->attach(7);
        Course::create([
            'code' => 'ACCT 313',
            'name' => 'Cost Accounting',
            'credits' => 3
        ])->departments()->attach([1, 7]);
        Course::create([
            'code' => 'ACCT 312',
            'name' => 'Advanced Accounting I',
            'credits' => 3
        ])->departments()->attach([1, 7]);
        Course::create([
            'code' => 'INSY	311',
            'name' => 'Accounting Software Application',
            'credits' => 3
        ])->departments()->attach(7);
        Course::create([
            'code' => 'ACCT 321',
            'name' => 'Advanced Accounting II',
            'credits' => 3
        ])->departments()->attach(7);
        Course::create([
            'code' => 'ACCT 326',
            'name' => 'Taxation',
            'credits' => 3
        ])->departments()->attach(7);
        Course::create([
            'code' => 'FNCE	316',
            'name' => 'Money and Banking',
            'credits' => 3
        ])->departments()->attach(7);
        Course::create([
            'code' => 'ACCT	411',
            'name' => 'Auditing I',
            'credits' => 3
        ])->departments()->attach(7);
        Course::create([
            'code' => 'ACCT	421',
            'name' => 'Auditing II',
            'credits' => 3
        ])->departments()->attach(7);
        Course::create([
            'code' => 'ACCT	416',
            'name' => 'Public Accounting',
            'credits' => 3
        ])->departments()->attach(7);
        // //History and Geography courses
        // Course::create([
        //     'code' => '',
        //     'name' => '',
        //     'credits' => 4
        // ]);
        // //English and French Literature courses
        // Course::create([
        //     'code' => '',
        //     'name' => '',
        //     'credits' => 4
        // ]);
        // //Educational Psychology and Religion courses
        // Course::create([
        //     'code' => '',
        //     'name' => '',
        //     'credits' => 4
        // ]);
        // //Economics and Mathematics courses
        // Course::create([
        //     'code' => '',
        //     'name' => '',
        //     'credits' => 4
        // ]);
        // //Information Technology and Accounting courses
        // Course::create([
        //     'code' => '',
        //     'name' => '',
        //     'credits' => 4
        // ]);
        // //Accounting and Information Technology courses
        // Course::create([
        //     'code' => '',
        //     'name' => '',
        //     'credits' => 4
        // ]);
        // //Nursing and Midwifery courses
        // Course::create([
        //     'code' => '',
        //     'name' => '',
        //     'credits' => 4
        // ]);
        // //Nursing and Midwifery Entry Requirements courses
        // Course::create([
        //     'code' => '',
        //     'name' => '',
        //     'credits' => 4
        // ]);
        // //Nursing Free Structure courses
        // Course::create([
        //     'code' => '',
        //     'name' => '',
        //     'credits' => 4
        // ]);
    }
}
