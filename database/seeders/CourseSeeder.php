<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    public function run()
    {
        $courses = [
            // Bachelor of Laws
            [
                'program_id' => 1, // Program ID from ProgramSeeder
                'courses' => [
                    ['name' => 'Introduction to Law', 'year' => 1, 'semester' => 1, 'description' => 'Basic concepts and principles of law.'],
                    ['name' => 'Legal Writing and Research', 'year' => 1, 'semester' => 2, 'description' => 'Research and writing skills for legal documents.'],
                    ['name' => 'Constitutional Law', 'year' => 2, 'semester' => 1, 'description' => 'Study of constitutional governance.'],
                    ['name' => 'Contract Law', 'year' => 2, 'semester' => 2, 'description' => 'Principles of contracts and agreements.'],
                    ['name' => 'Criminal Law', 'year' => 3, 'semester' => 1, 'description' => 'Legal frameworks for criminal offenses.'],
                    ['name' => 'Family Law', 'year' => 3, 'semester' => 2, 'description' => 'Legal aspects of family and relationships.'],
                    ['name' => 'Corporate Law', 'year' => 4, 'semester' => 1, 'description' => 'Laws governing corporate entities.'],
                    ['name' => 'International Law', 'year' => 4, 'semester' => 2, 'description' => 'Legal systems in global contexts.'],
                ],
            ],

            // Bachelor of Business Administration
            [
                'program_id' => 2,
                'courses' => [
                    ['name' => 'Introduction to Business Administration', 'year' => 1, 'semester' => 1, 'description' => 'Overview of business management.'],
                    ['name' => 'Business Communication', 'year' => 1, 'semester' => 2, 'description' => 'Effective communication in business.'],
                    ['name' => 'Human Resource Management', 'year' => 2, 'semester' => 1, 'description' => 'Basics of managing human resources.'],
                    ['name' => 'Organizational Behavior', 'year' => 2, 'semester' => 2, 'description' => 'Behavioral patterns in organizations.'],
                    ['name' => 'Strategic Management', 'year' => 3, 'semester' => 1, 'description' => 'Strategic decision-making processes.'],
                    ['name' => 'Entrepreneurship', 'year' => 3, 'semester' => 2, 'description' => 'Concepts and practices in entrepreneurship.'],
                    ['name' => 'Project Management', 'year' => 4, 'semester' => 1, 'description' => 'Planning and executing projects effectively.'],
                    ['name' => 'Business Ethics', 'year' => 4, 'semester' => 2, 'description' => 'Ethical considerations in business.'],
                ],
            ],

            // Bachelor of Marketing
            [
                'program_id' => 3,
                'courses' => [
                    ['name' => 'Principles of Marketing', 'year' => 1, 'semester' => 1, 'description' => 'Fundamentals of marketing.'],
                    ['name' => 'Consumer Behavior', 'year' => 1, 'semester' => 2, 'description' => 'Study of consumer decision-making.'],
                    ['name' => 'Marketing Research', 'year' => 2, 'semester' => 1, 'description' => 'Research methods in marketing.'],
                    ['name' => 'Digital Marketing', 'year' => 2, 'semester' => 2, 'description' => 'Techniques for online marketing.'],
                    ['name' => 'Brand Management', 'year' => 3, 'semester' => 1, 'description' => 'Strategies for brand positioning.'],
                    ['name' => 'Advertising and Promotion', 'year' => 3, 'semester' => 2, 'description' => 'Creating and managing promotional campaigns.'],
                    ['name' => 'Strategic Marketing', 'year' => 4, 'semester' => 1, 'description' => 'Long-term marketing strategies.'],
                    ['name' => 'Global Marketing', 'year' => 4, 'semester' => 2, 'description' => 'Marketing on a global scale.'],
                ],
            ],

             // Bachelor of Business Administration
             [
                'program_id' => 4,
                'courses' => [
                    ['name' => 'Introduction to Business Administration', 'year' => 1, 'semester' => 1, 'description' => 'Overview of business management.'],
                    ['name' => 'Business Communication', 'year' => 1, 'semester' => 2, 'description' => 'Effective communication in business.'],
                    ['name' => 'Human Resource Management', 'year' => 2, 'semester' => 1, 'description' => 'Basics of managing human resources.'],
                    ['name' => 'Organizational Behavior', 'year' => 2, 'semester' => 2, 'description' => 'Behavioral patterns in organizations.'],
                    ['name' => 'Strategic Management', 'year' => 3, 'semester' => 1, 'description' => 'Strategic decision-making processes.'],
                    ['name' => 'Entrepreneurship', 'year' => 3, 'semester' => 2, 'description' => 'Concepts and practices in entrepreneurship.'],
                    ['name' => 'Project Management', 'year' => 4, 'semester' => 1, 'description' => 'Planning and executing projects effectively.'],
                    ['name' => 'Business Ethics', 'year' => 4, 'semester' => 2, 'description' => 'Ethical considerations in business.'],
                ],
            ],
            // Bachelor of Purchasing and Supply (Program ID: 4)
            [
                'program_id' => 4,
                'courses' => [
                    ['name' => 'Introduction to Supply Chain Management', 'year' => 1, 'semester' => 1, 'description' => 'Basic concepts in procurement and supply chain.'],
                    ['name' => 'Warehousing and Inventory Management', 'year' => 2, 'semester' => 2, 'description' => 'Study of warehousing systems and inventory practices.'],
                    ['name' => 'Procurement Law', 'year' => 3, 'semester' => 1, 'description' => 'Legal frameworks governing procurement.'],
                    ['name' => 'Global Supply Chain Strategies', 'year' => 4, 'semester' => 2, 'description' => 'Strategic supply chain operations in a global context.'],
                ],
            ],

            // Bachelor of Accountancy (Program ID: 5)
            [
                'program_id' => 5,
                'courses' => [
                    ['name' => 'Financial Accounting I', 'year' => 1, 'semester' => 1, 'description' => 'Introduction to financial accounting principles.'],
                    ['name' => 'Taxation', 'year' => 2, 'semester' => 2, 'description' => 'Overview of taxation laws and practices.'],
                    ['name' => 'Auditing and Assurance', 'year' => 3, 'semester' => 1, 'description' => 'Auditing principles and methodologies.'],
                    ['name' => 'Corporate Financial Reporting', 'year' => 4, 'semester' => 2, 'description' => 'Advanced financial reporting for corporations.'],
                ],
            ],

            // Bachelor of Banking and Finance (Program ID: 6)
            [
                'program_id' => 6,
                'courses' => [
                    ['name' => 'Principles of Banking', 'year' => 1, 'semester' => 1, 'description' => 'Basic principles and functions of banking.'],
                    ['name' => 'Financial Markets and Institutions', 'year' => 2, 'semester' => 1, 'description' => 'Study of financial systems and institutions.'],
                    ['name' => 'Risk Management in Banking', 'year' => 3, 'semester' => 2, 'description' => 'Managing financial risks in banking.'],
                    ['name' => 'Investment Analysis and Portfolio Management', 'year' => 4, 'semester' => 1, 'description' => 'Techniques for managing investment portfolios.'],
                ],
            ],

            // Bachelor of Actuarial Science (Program ID: 7)
            [
                'program_id' => 7,
                'courses' => [
                    ['name' => 'Introduction to Actuarial Science', 'year' => 1, 'semester' => 1, 'description' => 'Overview of actuarial science and its applications.'],
                    ['name' => 'Probability and Statistics for Actuaries', 'year' => 2, 'semester' => 1, 'description' => 'Mathematical foundations for actuarial work.'],
                    ['name' => 'Life Contingencies', 'year' => 3, 'semester' => 1, 'description' => 'Actuarial models for life insurance and annuities.'],
                    ['name' => 'Risk Theory', 'year' => 4, 'semester' => 2, 'description' => 'Theories and models of risk management.'],
                ],
            ],

            // Bachelor of Insurance and Pension Management (Program ID: 8)
            [
                'program_id' => 8,
                'courses' => [
                    ['name' => 'Principles of Insurance', 'year' => 1, 'semester' => 1, 'description' => 'Introduction to insurance fundamentals.'],
                    ['name' => 'Pension Systems Management', 'year' => 2, 'semester' => 2, 'description' => 'Management of pension schemes and systems.'],
                    ['name' => 'Insurance Risk Analysis', 'year' => 3, 'semester' => 1, 'description' => 'Risk assessment in insurance operations.'],
                    ['name' => 'Advanced Pension Planning', 'year' => 4, 'semester' => 2, 'description' => 'Strategies for pension fund management.'],
                ],
            ],

            // Bachelor of Economics and Finance (Program ID: 9)
            [
                'program_id' => 9,
                'courses' => [
                    ['name' => 'Microeconomics', 'year' => 1, 'semester' => 1, 'description' => 'Study of individual economic agents.'],
                    ['name' => 'Macroeconomics', 'year' => 1, 'semester' => 2, 'description' => 'Economy-wide phenomena and policies.'],
                    ['name' => 'Econometrics', 'year' => 3, 'semester' => 1, 'description' => 'Quantitative analysis in economics.'],
                    ['name' => 'Financial Economics', 'year' => 4, 'semester' => 2, 'description' => 'Intersection of economics and finance.'],
                ],
            ],

            // Bachelor of Political and International Relations (Program ID: 10)
            [
                'program_id' => 10,
                'courses' => [
                    ['name' => 'Introduction to Political Science', 'year' => 1, 'semester' => 1, 'description' => 'Basics of political systems and ideologies.'],
                    ['name' => 'International Relations Theory', 'year' => 2, 'semester' => 1, 'description' => 'Theoretical frameworks for global relations.'],
                    ['name' => 'Global Governance', 'year' => 3, 'semester' => 2, 'description' => 'Governance structures on a global scale.'],
                    ['name' => 'Conflict Resolution and Negotiation', 'year' => 4, 'semester' => 1, 'description' => 'Techniques for resolving international conflicts.'],
                ],
            ],

            // Bachelor of Development Studies (Program ID: 11)
            [
                'program_id' => 11,
                'courses' => [
                    ['name' => 'Foundations of Development Studies', 'year' => 1, 'semester' => 1, 'description' => 'Introduction to social and economic development.'],
                    ['name' => 'Sustainable Development Goals', 'year' => 2, 'semester' => 1, 'description' => 'UN SDGs and their implementation.'],
                    ['name' => 'Project Planning and Management', 'year' => 3, 'semester' => 1, 'description' => 'Tools and techniques for development projects.'],
                    ['name' => 'Development Policy and Advocacy', 'year' => 4, 'semester' => 2, 'description' => 'Policy formulation and advocacy strategies.'],
                ],
            ],

            // Bachelor of Information Systems and Technology (Program ID: 12)
            [
                'program_id' => 12,
                'courses' => [
                    ['name' => 'Introduction to Information Systems', 'year' => 1, 'semester' => 1, 'description' => 'Basic principles of IT systems.'],
                    ['name' => 'Database Management Systems', 'year' => 2, 'semester' => 1, 'description' => 'Design and management of databases.'],
                    ['name' => 'Systems Analysis and Design', 'year' => 3, 'semester' => 2, 'description' => 'Analyzing and designing IT systems.'],
                    ['name' => 'IT Project Management', 'year' => 4, 'semester' => 2, 'description' => 'Managing IT-related projects.'],
                ],
            ],

            // Bachelor of Computer Science (Program ID: 13)
            [
                'program_id' => 13,
                'courses' => [
                    ['name' => 'Programming Fundamentals', 'year' => 1, 'semester' => 1, 'description' => 'Introduction to programming concepts.'],
                    ['name' => 'Data Structures and Algorithms', 'year' => 2, 'semester' => 1, 'description' => 'Efficient data organization and processing.'],
                    ['name' => 'Operating Systems', 'year' => 3, 'semester' => 1, 'description' => 'Study of operating system principles.'],
                    ['name' => 'Artificial Intelligence', 'year' => 4, 'semester' => 2, 'description' => 'Introduction to AI and machine learning.'],
                ],
            ],


              

            // Additional Programs: Add similar structures for other programs
        ];

        foreach ($courses as $courseData) {
            foreach ($courseData['courses'] as $course) {
                DB::table('courses')->insert([
                    'program_id' => $courseData['program_id'],
                    'name' => $course['name'],
                    'year' => $course['year'],
                    'semester' => $course['semester'],
                    'description' => $course['description'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
