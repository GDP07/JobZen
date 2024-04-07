-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2024 at 05:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobzen`
--

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `company_url` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `monthly_pay` double DEFAULT NULL,
  `preferred_gender` varchar(255) DEFAULT 'Any',
  `minimum_qualification_level` varchar(255) DEFAULT 'No minimum qualification required',
  `maximum_age` int(11) DEFAULT NULL,
  `minimum_age` int(11) DEFAULT NULL,
  `minimum_years_experience` int(11) DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `posted_by` int(11) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `closing_date` varchar(255) DEFAULT NULL,
  `closing_time` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `title`, `company`, `company_url`, `location`, `category`, `job_type`, `contact_number`, `contact_email`, `monthly_pay`, `preferred_gender`, `minimum_qualification_level`, `maximum_age`, `minimum_age`, `minimum_years_experience`, `banner_image`, `description`, `posted_by`, `created_at`, `closing_date`, `closing_time`) VALUES
(1, 'Receptionist', 'Berjaya Hotel Colombo', 'https://www.berjayahotel.com/colombo', 'Mount Lavinia', 'Hotels/Restaurants', 'Full time', '702221757', 'info@berjayahotel.com', 25000, 'Any', 'Degree', 44, 20, 2, 'banner_660ac4fe1477c0.60099523.png', 'Overview:\r\nBerjaya Hotel Colombo is seeking a skilled and dedicated Receptionist to join our team. As a Receptionist, you will be the first point of contact for our guests, providing exceptional customer service and administrative support to ensure a smooth and enjoyable experience for all visitors.\r\n\r\nResponsibilities:\r\n\r\n*Greet guests in a friendly and professional manner upon arrival.\r\n*Handle incoming calls and inquiries, directing them to the appropriate department or individual.\r\n*Assist guests with check-in and check-out procedures, ensuring accuracy and efficiency.\r\n*Manage reservations and room assignments, ensuring all guest preferences are accommodated.\r\n*Provide information about hotel facilities, services, and local attractions to guests.\r\n*Process payments and maintain accurate records of transactions.\r\n*Address guest concerns and complaints promptly and effectively, escalating issues as needed.\r\n*Maintain cleanliness and organization at the reception area.\r\n*Assist with administrative tasks such as filing, photocopying, and data entry.\r\n*Collaborate with other hotel staff to ensure a seamless guest experience.\r\n\r\nRequirements:\r\n\r\nGender: Any\r\nAge Range: Below 44 years\r\nMinimum Qualification: Not specified\r\nMinimum Years of Experience: 1 year\r\nDifferently Abled May Apply: Yes\r\nSkills and Qualifications:\r\n\r\nExcellent communication and interpersonal skills.\r\nStrong customer service orientation.\r\nAbility to multitask and prioritize tasks effectively.\r\nProficiency in MS Office and hotel management software.\r\nAttention to detail and accuracy.\r\nAbility to remain calm and composed in high-pressure situations.\r\nPrevious experience in a similar role is preferred but not required.\r\nJoin our team at Berjaya Hotel Colombo and be a part of delivering exceptional hospitality to our guests. Apply now!', 1, '1711971822', '2024-04-27', '20:58'),
(2, 'Room Boy', 'Berjaya Hotel Colombo', 'https://www.berjayahotel.com/colombo', 'Colombo 01', 'Hotels/Restaurants', 'Full time', '702221757', 'info@berjayahotel.com', 25000, 'Male', 'O/L', 0, 0, 0, 'banner_660ac6ceea85e7.79200119.png', 'Overview:\r\n🌟 Berjaya Hotel Colombo is currently seeking a dedicated and responsible Room Boy to join our team. As a Room Boy, you will play a vital role in maintaining cleanliness and organization in guest rooms, ensuring a comfortable and pleasant stay for our guests.\r\n\r\nResponsibilities:\r\n\r\n🧹 Clean and tidy guest rooms according to established standards and procedures.\r\n🛏️ Make beds, change linens, and replenish amenities such as towels and toiletries.\r\n🧼 Vacuum, sweep, mop, and dust guest rooms and common areas.\r\n🗑️ Empty trash containers and ensure proper disposal of waste.\r\n🚨 Report any maintenance issues or damages in guest rooms to the appropriate department.\r\n🧴 Ensure all cleaning equipment and supplies are properly maintained and stored.\r\n💬 Assist guests with requests or inquiries related to their accommodations.\r\n⚠️ Follow safety protocols and procedures to maintain a safe and hygienic environment.\r\n👥 Collaborate with other hotel staff to ensure efficient operation and guest satisfaction.\r\n✨ Uphold the hotel\'s reputation for cleanliness and hospitality at all times.\r\nRequirements:\r\n\r\nGender: Any\r\nAge Range: 18 years and above\r\nMinimum Qualification: Not specified\r\nMinimum Years of Experience: Not applicable\r\nDifferently Abled May Apply: Yes\r\nSkills and Qualifications:\r\n\r\nAbility to follow instructions and work independently.\r\nAttention to detail and thoroughness in cleaning tasks.\r\nPhysical stamina and ability to perform repetitive tasks.\r\nGood communication and customer service skills.\r\nPositive attitude and willingness to learn and adapt.\r\nPrevious experience in housekeeping or related field is an advantage but not required.\r\n🚀 If you are passionate about providing exceptional service and ensuring guest satisfaction, we encourage you to apply for the Room Boy position at Berjaya Hotel Colombo. Join our team and be a part of creating memorable experiences for our guests. Apply now!', 1, '1711961822', '2024-05-04', '12:11'),
(3, 'Logistics Executive', 'Cargo Hub', 'https://www.thecargohub.lk/', 'Kelaniya', 'Logistics/Warehouse/Transport', 'Full time', '702221757', 'info@thecargohub.lk', 0, 'Male', 'A/L', 41, 21, 2, 'banner_660ac7ce9a0f22.11520397.jpg', 'Overview\r\nWe are leading logistics company which is located in kelaniya.\r\n\r\nWe are looking for enthusiastic candidates to join our team for the post of Logistics /Operations Executive. Email us your resume before 15th of December 2023!\r\n\r\n \r\n\r\nExecutive skills and qualifications\r\n\r\n·    Excellent verbal and non-verbal communication skills\r\n\r\n·    Customer service skills\r\n\r\n·    Problem-solving abilities\r\n\r\n·    Leadership capabilities\r\n\r\n·    Teamwork skills\r\n\r\n·    Safety and security awareness\r\n\r\n·    Organizational skills\r\n\r\nRequirements:\r\n\r\n·                     Diploma/Degree or equivalent\r\n\r\n·                     At least 2 – 3 years of relevant executive working experience in the warehouse/related field\r\n\r\n·                     Hardworking and able to work independently under tight schedules\r\n\r\n·                     Experiences handling both warehouse team and customer service will be an added advantage', 1, '1711951822', '2024-05-11', '13:17'),
(4, 'Accountant', 'ABC Accounting Firm', 'www.abcaccounting.com', 'Colombo 01', 'Accounting/Finance/Auditing', 'Full-time', '702221757', 'info@abcaccounting.com', 80000, 'Any', 'Bachelor', 35, 25, 2, '', 'We are seeking a qualified accountant to join our team.', 1, '1711941822', '2024-05-01', '17:00'),
(5, 'Office Assistant', 'XYZ Company', 'www.xyzcompany.com', 'Kandy', 'Admin/Clerk/Office Assistant', 'Part-time', '702221757', 'hr@xyzcompany.com', 35000, 'Any', 'O/L', 30, 20, 1, '', 'We are looking for an office assistant to assist with administrative tasks.', 1, '1711931822', '2024-04-15', '12:00'),
(6, 'Farm Worker', 'Green Farms', 'www.greenfarms.com', 'Anuradhapura', 'Agriculture/Dairy/Fisheries', 'Contract', '702221757', 'info@greenfarms.com', 45000, 'Male', 'No formal education required', 40, 18, 0, '', 'We need workers for our farm to assist with planting and harvesting.', 1, '1711921822', '2024-04-10', '09:00'),
(7, 'Garment Technician', 'Fashion Express', 'www.fashionexpress.com', 'Colombo 02', 'Apparel/Garment/Clothing', 'Full-time', '702221757', 'careers@fashionexpress.com', 60000, 'Any', 'Diploma', 35, 20, 3, '', 'Join our team as a garment technician to work on clothing production.', 1, '1711911822', '2024-04-20', '15:30'),
(8, 'Interior Designer', 'Modern Interiors', 'www.moderninteriors.com', 'Colombo 03', 'Architecture/Interior/Design', 'Full-time', '702221757', 'jobs@moderninteriors.com', 90000, 'Any', 'Bachelor', 40, 25, 2, '', 'We are hiring an experienced interior designer to create innovative designs.', 1, '1711901822', '2024-04-25', '14:00'),
(9, 'Automobile Mechanic', 'Fast Fix Auto', 'www.fastfixauto.com', 'Colombo 04', 'Automotive/Aviation', 'Full-time', '702221757', 'careers@fastfixauto.com', 55000, 'Any', 'Certificate', 40, 22, 2, '', 'We are looking for skilled mechanics to work on automobiles.', 1, '1711891822', '2024-04-22', '10:00'),
(10, 'Financial Analyst', 'Global Bank', 'www.globalbank.com', 'Colombo 05', 'Banking/Finance', 'Full-time', '702221757', 'hr@globalbank.com', 100000, 'Any', 'Master', 45, 28, 5, '', 'Join our team as a financial analyst to analyze financial data and provide insights.', 1, '1711881822', '2024-04-18', '16:00'),
(11, 'Customer Service Representative', 'Call Connect', 'www.callconnect.com', 'Colombo 06', 'BPO/KPO', 'Full-time', '702221757', 'careers@callconnect.com', 40000, 'Any', 'A/L', 30, 20, 1, '', 'We need enthusiastic individuals to join our customer service team.', 1, '1711871822', '2024-04-14', '13:00'),
(12, 'Business Development Executive', 'Strategic Solutions', 'www.strategicsolutions.com', 'Colombo 07', 'Business Development/Strategy/Corporate Planning', 'Full-time', '702221757', 'jobs@strategicsolutions.com', 75000, 'Any', 'Bachelor', 35, 24, 2, '', 'We are hiring dynamic individuals to drive business growth and expansion.', 1, '1711861822', '2024-04-23', '11:30'),
(13, 'Carpenter', 'Woodworks Ltd.', 'www.woodworksltd.com', 'Colombo 08', 'Carpentry/Woodwork/Furniture', 'Full-time', '702221757', 'info@woodworksltd.com', 50000, 'Male', 'O/L', 40, 25, 2, '', 'Join our team as a skilled carpenter to work on wood projects.', 1, '1711851822', '2024-04-19', '14:30'),
(14, 'Cashier', 'Quick Mart', 'www.quickmart.com', 'Colombo 09', 'Cashier', 'Part-time', '702221757', 'careers@quickmart.com', 30000, 'Any', 'O/L', 35, 20, 1, '', 'We are seeking reliable cashiers to handle transactions at our store.', 1, '1711841822', '2024-04-15', '12:00'),
(15, 'Cleaner', 'Sparkling Cleaners', 'www.sparklingcleaners.com', 'Colombo 10', 'Cleaning/Maintenance', 'Part-time', '702221757', 'jobs@sparklingcleaners.com', 25000, 'Any', 'No formal education required', 40, 18, 0, 'banner_660acda90d1988.69748216.webp', 'We need cleaners to maintain cleanliness at various locations.', 1, '1711831822', '2024-04-10', '09:00'),
(16, 'Civil Engineer', 'Construction Co.', 'www.constructionco.com', 'Colombo 11', 'Construction/Civil Engineering/QS', 'Full-time', '702221757', 'hr@constructionco.com', 80000, 'Any', 'Bachelor', 40, 25, 3, '', 'Join our team as a civil engineer to oversee construction projects.', 1, '1711821822', '2024-04-25', '16:00'),
(17, 'Consultant', 'Global Consultancy', 'www.globalconsultancy.com', 'Colombo 12', 'Consultancy', 'Full-time', '702221757', 'info@globalconsultancy.com', 90000, 'Any', 'Master', 45, 28, 5, '', 'We are hiring consultants to provide expert advice to clients.', 1, '1711811822', '2024-04-18', '17:00'),
(18, 'Content Writer', 'Creative Content', 'www.creativecontent.com', 'Colombo 13', 'Content Writer/Copywriter', 'Freelance', '702221757', 'careers@creativecontent.com', 60000, 'Any', 'Bachelor', 35, 22, 2, 'banner_660acd733a26c8.23050552.avif', 'We need talented writers to create engaging content for various projects.', 1, '1711801822', '2024-04-22', '11:00'),
(19, 'Cook', 'Tasty Bites', 'www.tastybites.com', 'Colombo 14', 'Cook/Chef', 'Full-time', '702221757', 'jobs@tastybites.com', 40000, 'Any', 'O/L', 40, 20, 2, '', 'We are looking for cooks to prepare delicious meals at our restaurant.', 1, '1711791822', '2024-04-20', '15:00'),
(20, 'Data Entry Operator', 'Data Solutions', 'www.datasolutions.com', 'Colombo 15', 'Data Entry/Operator', 'Part-time', '702221757', 'hr@datasolutions.com', 35000, 'Any', 'O/L', 35, 20, 1, '', 'We need data entry operators to input data into our system.', 1, '1711781822', '2024-04-16', '10:30'),
(21, 'Delivery Rider', 'Speedy Delivery', 'www.speedydelivery.com', 'Galle', 'Delivery Rider/Driver', 'Part-time', '702221757', 'jobs@speedydelivery.com', 30000, 'Any', 'O/L', 35, 20, 1, '', 'Join our team as a delivery rider to deliver packages efficiently.', 1, '1711771822', '2024-04-17', '11:00'),
(22, 'Dentist', 'Smile Dental Clinic', 'www.smiledentalclinic.com', 'Matara', 'Dentist/Dental Surgeon', 'Full-time', '702221757', 'careers@smiledentalclinic.com', 120000, 'Any', 'DDS', 45, 25, 5, '', 'We are hiring a qualified dentist to provide dental care to patients.', 1, '1711761822', '2024-04-26', '09:30'),
(23, 'Digital Marketer', 'Digital Solutions', 'www.digitalsolutions.com', 'Negombo', 'Digital Marketing', 'Full-time', '702221757', 'jobs@digitalsolutions.com', 70000, 'Any', 'Bachelor', 35, 22, 2, '', 'We need digital marketers to develop and implement online marketing strategies.', 1, '1711751822', '2024-04-23', '12:00'),
(24, 'Driver', 'Transport Services', 'www.transportservices.com', 'Kurunegala', 'Driver/Chauffeur', 'Full-time', '702221757', 'info@transportservices.com', 45000, 'Any', 'O/L', 40, 23, 2, '', 'We are looking for drivers to operate vehicles for transportation.', 1, '1711741822', '2024-04-21', '14:30'),
(25, 'Electrical Engineer', 'Power Tech', 'www.powertech.com', 'Panadura', 'Electrical Engineering/Electronics', 'Full-time', '702221757', 'careers@powertech.com', 85000, 'Any', 'Bachelor', 40, 25, 3, '', 'Join our team as an electrical engineer to design and maintain electrical systems.', 1, '1711731822', '2024-04-24', '15:00'),
(26, 'English Teacher', 'Global Academy', 'www.globalacademy.com', 'Batticaloa', 'Education/Training', 'Full-time', '702221757', 'hr@globalacademy.com', 60000, 'Any', 'Bachelor', 40, 25, 2, '', 'We are hiring English teachers to teach language skills to students.', 1, '1711721822', '2024-04-19', '16:30'),
(27, 'Fashion Designer', 'Chic Creations', 'www.chiccreations.com', 'Badulla', 'Fashion Designing/Apparel', 'Full-time', '702221757', 'info@chiccreations.com', 70000, 'Any', 'Diploma', 35, 22, 2, '', 'Join our team as a fashion designer to create trendy clothing designs.', 1, '1711711822', '2024-04-22', '10:30'),
(28, 'Fitness Instructor', 'Fit & Active Gym', 'www.fitandactivegym.com', 'Ratnapura', 'Fitness/Wellness', 'Full-time', '702221757', 'careers@fitandactivegym.com', 50000, 'Any', 'Certificate', 40, 22, 2, '', 'We are looking for fitness instructors to lead workout sessions.', 1, '1711701822', '2024-04-20', '13:00'),
(29, 'Graphic Designer', 'Design Studio', 'www.designstudio.com', 'Ampara', 'Graphic Design/Multimedia', 'Full-time', '702221757', 'jobs@designstudio.com', 60000, 'Any', 'Bachelor', 35, 22, 2, '', 'We need creative graphic designers to produce visual concepts.', 1, '1711691822', '2024-04-16', '11:30'),
(30, 'HR Manager', 'HR Solutions', 'www.hrsolutions.com', 'Monaragala', 'HR/Recruitment', 'Full-time', '702221757', 'hr@hrsolutions.com', 90000, 'Any', 'Master', 45, 28, 5, '', 'We are hiring an HR manager to oversee human resources operations.', 1, '1711681822', '2024-04-17', '12:30'),
(31, 'IT Administrator', 'Tech Solutions', 'www.techsolutions.com', 'Wellawaya', 'IT/Telecommunication', 'Full-time', '702221757', 'careers@techsolutions.com', 80000, 'Any', 'Bachelor', 40, 25, 3, '', 'Join our team as an IT administrator to manage network systems.', 1, '1711671822', '2024-04-18', '14:00'),
(32, 'Journalist', 'Media Group', 'www.mediagroup.com', 'Polonnaruwa', 'Media/Journalism', 'Full-time', '702221757', 'jobs@mediagroup.com', 70000, 'Any', 'Bachelor', 40, 23, 2, '', 'We are hiring journalists to report news and stories.', 1, '1711661822', '2024-04-19', '15:00'),
(33, 'Lab Technician', 'Lab Solutions', 'www.labsolutions.com', 'Trincomalee', 'Healthcare/Pharmaceutical', 'Full-time', '702221757', 'info@labsolutions.com', 60000, 'Any', 'Diploma', 40, 22, 2, '', 'We need lab technicians to perform medical tests and analyses.', 1, '1711651822', '2024-04-20', '16:00'),
(34, 'Lawyer', 'Legal Associates', 'www.legalassociates.com', 'Battaramulla', 'Legal/Law', 'Full-time', '702221757', 'careers@legalassociates.com', 100000, 'Any', 'LLB', 45, 25, 5, '', 'We are seeking qualified lawyers to provide legal advice and representation.', 1, '1711641822', '2024-04-21', '17:00'),
(35, 'Lecturer', 'University', 'www.university.com', 'Jaffna', 'Academic/Teaching/Training', 'Full-time', '702221757', 'hr@university.com', 90000, 'Any', 'Master', 45, 28, 5, 'banner_660ace3a3fff64.94712280.jpg', 'Join our university as a lecturer to teach students in your field of expertise.', 1, '1711631822', '2024-04-22', '09:00'),
(36, 'Mechanical Engineer', 'Mech Engineering', 'www.mechengineering.com', 'Vavuniya', 'Engineering', 'Full-time', '702221757', 'info@mecheng.com', 85000, 'Any', 'Bachelor', 40, 25, 3, '', 'We are hiring mechanical engineers to design and maintain machinery.', 1, '1711621822', '2024-04-23', '10:00'),
(37, 'Medical Doctor', 'Medicare Hospital', 'www.medicarehospital.com', 'Kandy', 'Doctor/Medical Officer', 'Full-time', '702221757', 'careers@medicarehospital.com', 150000, 'Any', 'MBBS', 50, 28, 7, '', 'We are seeking qualified doctors to provide medical care to patients.', 1, '1711611822', '2024-04-24', '11:00'),
(38, 'Nurse', 'Nursing Care', 'www.nursingcare.com', 'Nuwara Eliya', 'Nursing/Healthcare', 'Full-time', '702221757', 'jobs@nursingcare.com', 60000, 'Any', 'Nursing Diploma', 40, 20, 2, '', 'We need nurses to provide nursing care and support to patients.', 1, '1711601822', '2024-04-25', '12:00'),
(39, 'Office Manager', 'Office Solutions', 'www.officesolutions.com', 'Anuradhapura', 'Admin/Clerk/Office Assistant', 'Full-time', '702221757', 'hr@officesolutions.com', 80000, 'Any', 'Bachelor', 40, 25, 3, '', 'We are hiring an office manager to oversee administrative tasks.', 1, '1711591822', '2024-04-26', '13:00'),
(40, 'Photographer', 'Snapshots Studio', 'www.snapshotstudio.com', 'Galle', 'Photography/Videography', 'Freelance', '702221757', 'jobs@snapshotstudio.com', 50000, 'Any', 'Certificate', 35, 22, 2, '', 'We need photographers to capture memorable moments.', 1, '1711581822', '2024-04-27', '14:00'),
(41, 'Plumber', 'Pipe Masters', 'www.pipemasters.com', 'Badulla', 'Plumbing/Pipefitting', 'Full-time', '702221757', 'info@pipemasters.com', 50000, 'Male', 'O/L', 45, 25, 2, '', 'Join our team as a skilled plumber to work on plumbing projects.', 1, '1711571822', '2024-04-28', '15:00'),
(42, 'Project Manager', 'Project Solutions', 'www.projectsolutions.com', 'Ratnapura', 'Project Management/Coordinator', 'Full-time', '702221757', 'careers@projectsolutions.com', 100000, 'Any', 'Master', 45, 28, 5, '', 'We are hiring project managers to oversee project execution and delivery.', 1, '1711561822', '2024-04-29', '16:00'),
(43, 'Real Estate Agent', 'Realty Solutions', 'www.realtysolutions.com', 'Panadura', 'Real Estate/Property Management', 'Full-time', '702221757', 'hr@realtysolutions.com', 80000, 'Any', 'Bachelor', 40, 25, 3, '', 'Join our team as a real estate agent to assist clients in buying, selling, and renting properties.', 1, '1711551822', '2024-04-30', '17:00'),
(44, 'Receptionist', 'Front Desk Services', 'www.frontdeskservices.com', 'Polonnaruwa', 'Receptionist/Front Office/Admin', 'Full-time', '702221757', 'info@frontdeskservices.com', 40000, 'Any', 'O/L', 35, 20, 1, '', 'We are seeking friendly receptionists to greet and assist visitors.', 1, '1711541822', '2024-05-01', '09:00'),
(45, 'Sales Executive', 'Sales Solutions', 'www.salessolutions.com', 'Jaffna', 'Sales/Marketing/Merchandising', 'Full-time', '702221757', 'careers@salessolutions.com', 70000, 'Any', 'Bachelor', 40, 23, 2, '', 'We are hiring sales executives to promote and sell products/services.', 1, '1711531822', '2024-05-02', '10:00'),
(46, 'Security Guard', 'Safe Guard Security', 'www.safeguardsecurity.com', 'Trincomalee', 'Security/Law Enforcement', 'Full-time', '702221757', 'hr@safeguardsecurity.com', 35000, 'Male', 'O/L', 40, 20, 1, '', 'We need security guards to protect our premises and assets.', 1, '1711521822', '2024-05-03', '11:00'),
(47, 'Software Developer', 'Code Masters', 'www.codemasters.com', 'Battaramulla', 'IT/Software', 'Full-time', '702221757', 'jobs@codemasters.com', 90000, 'Any', 'Bachelor', 40, 25, 3, '', 'We are hiring software developers to design and develop software applications.', 1, '1711511822', '2024-05-04', '12:00'),
(48, 'Teacher', 'Education Center', 'www.educationcenter.com', 'Anuradhapura', 'Teaching/Education', 'Full-time', '702221757', 'info@educationcenter.com', 60000, 'Any', 'Bachelor', 40, 25, 2, 'banner_660ace0377c484.41554229.jpg', 'We are seeking qualified teachers to educate students in various subjects.', 1, '1711501822', '2024-05-05', '13:00'),
(49, 'Tour Guide', 'Explore Tours', 'www.exploretours.com', 'Monaragala', 'Tourism/Hotel Management', 'Full-time', '702221757', 'careers@exploretours.com', 50000, 'Any', 'O/L', 40, 22, 2, 'banner_660acd534be698.97063776.png', 'We need tour guides to provide informative tours to visitors.', 1, '1711491822', '2024-05-06', '14:00'),
(50, 'Translator', 'Language Services', 'www.languageservices.com', 'Ampara', 'Language/Translation', 'Freelance', '702221757', 'hr@languageservices.com', 40000, 'Any', 'Bachelor', 35, 22, 2, 'banner_660acc7d43e418.40382979.jpg', 'We need translators to translate documents and content into different languages.', 1, '1711481822', '2024-05-07', '15:00'),
(51, 'Veterinarian', 'Animal Care Clinic', 'www.animalcareclinic.com', 'Wellawaya', 'Veterinary/Animal Care', 'Full-time', '702221757', 'jobs@animalcareclinic.com', 80000, 'Any', 'DVM', 45, 25, 5, 'banner_660acc35039f47.99253179.webp', 'We are hiring a veterinarian to provide medical care to animals.', 1, '1711471822', '2024-05-08', '16:00'),
(52, 'Waiter/Waitress', 'Fine Dining Restaurant', 'www.finediningrestaurant.com', 'Gampaha', 'Food/Beverage/Restaurant', 'Full-time', '702221757', 'careers@finediningrestaurant.com', 30000, 'Any', 'O/L', 35, 20, 1, 'banner_660acc042e82f3.16988951.jpg', 'We are seeking waiters/waitresses to provide excellent customer service.', 1, '1711461822', '2024-05-09', '17:00'),
(53, 'Web Developer', 'Web Solutions', 'www.websolutions.com', 'Kurunegala', 'IT/Software', 'Full-time', '702221757', 'info@websolutions.com', 80000, 'Any', 'Bachelor', 40, 25, 3, 'banner_660acbb757da53.40092786.jpeg', 'We are hiring web developers to create and maintain websites.', 1, '1711451822', '2024-05-10', '09:00'),
(54, 'Writer', 'Writing Services', 'www.writingservices.com', 'Negombo', 'Writing/Editing', 'Freelance', '702221757', 'jobs@writingservices.com', 50000, 'Any', 'Bachelor', 35, 22, 2, 'banner_660acb2486b071.36079411.avif', 'We need writers to produce content for various projects.', 1, '1711441822', '2024-05-11', '10:00'),
(55, 'Software Engineer', 'Tech Solutions Ltd', 'http://www.techsolutions.com', 'Colombo', 'IT/Programming', 'Full-time', '+94123456789', 'hr@techsolutions.com', 100000, 'Any', 'Bachelor', 35, 21, 2, '', 'We are looking for a skilled software engineer to join our team.', 1, '1711431822', '2024-04-15', '17:00:00'),
(56, 'Marketing Manager', 'Global Marketing Agency', 'http://www.globalmarketing.com', 'London', 'Sales/Marketing/Merchandising', 'Full-time', '+447890123456', 'info@globalmarketing.com', 80000, 'Any', 'Master', 40, 25, 5, '', 'We are seeking an experienced marketing manager to develop and execute marketing strategies.', 1, '1711421822', '2024-04-16', '16:30:00'),
(57, 'Accountant', 'Finance Experts LLC', 'http://www.financeexperts.com', 'New York', 'Accounting/Finance/Auditing', 'Full-time', '+12125551234', 'careers@financeexperts.com', 90000, 'Any', 'Bachelor', 40, 22, 3, '', 'We have an opening for a qualified accountant with strong analytical skills.', 1, '1711411822', '2024-04-17', '18:00:00'),
(58, 'Graphic Designer', 'Creative Minds Agency', 'http://www.creativeminds.com', 'Los Angeles', 'Design/Art/Photography', 'Part-time', '+13235557777', 'jobs@creativeminds.com', 60000, 'Any', 'Diploma', 35, 20, 2, '', 'Join our team as a graphic designer and bring creativity to our projects.', 1, '1711401822', '2024-04-18', '15:00:00'),
(59, 'Customer Service Representative', 'ServiceFirst Inc.', 'http://www.servicefirst.com', 'Chicago', 'Customer Support/Call Centre', 'Full-time', '+17731234567', 'careers@servicefirst.com', 50000, 'Any', 'Certificate', 30, 18, 1, '', 'We are hiring customer service representatives to assist our clients.', 1, '1711391822', '2024-04-19', '17:30:00'),
(60, 'Human Resources Manager', 'HR Solutions Ltd', 'http://www.hrsolutions.com', 'Sydney', 'HR/Recruitment/Training', 'Full-time', '+61234567890', 'info@hrsolutions.com', 85000, 'Any', 'Master', 45, 25, 5, '', 'Seeking an experienced HR manager to oversee our HR department.', 1, '1711381822', '2024-04-20', '16:00:00'),
(61, 'Sales Executive', 'SalesPro Inc.', 'http://www.salespro.com', 'Toronto', 'Sales/Marketing/Merchandising', 'Full-time', '+14165551234', 'jobs@salespro.com', 70000, 'Any', 'Bachelor', 35, 21, 2, '', 'Join our sales team and drive revenue growth for our company.', 1, '1711371822', '2024-04-21', '14:00:00'),
(62, 'Web Developer', 'Web Wizards Ltd', 'http://www.webwizards.com', 'Berlin', 'IT/Programming', 'Full-time', '+49304567890', 'careers@webwizards.com', 95000, 'Any', 'Bachelor', 40, 22, 3, '', 'We are looking for a talented web developer to build and maintain websites.', 1, '1711361822', '2024-04-22', '13:30:00'),
(63, 'Administrative Assistant', 'Admin Solutions Inc.', 'http://www.adminsolutions.com', 'Paris', 'Admin/Clerk/Office Assistant', 'Full-time', '+33123456789', 'jobs@adminsolutions.com', 60000, 'Any', 'Diploma', 30, 18, 1, '', 'We need an administrative assistant to support our office operations.', 1, '1711351822', '2024-04-23', '12:00:00'),
(64, 'Financial Analyst', 'FinancePros LLC', 'http://www.financepros.com', 'Singapore', 'Banking/Finance/Insurance', 'Full-time', '+65678901234', 'careers@financepros.com', 85000, 'Any', 'Bachelor', 35, 20, 2, '', 'Join our team as a financial analyst and help analyze financial data.', 1, '1711341822', '2024-04-24', '11:30:00'),
(65, 'Content Writer', 'ContentCreators Ltd', 'http://www.contentcreators.com', 'Mumbai', 'Writing/Editing', 'Freelance', '+91234567890', 'info@contentcreators.com', 40000, 'Any', 'Bachelor', 30, 20, 1, '', 'We are hiring freelance content writers to create engaging content.', 1, '1711331822', '2024-04-25', '10:00:00'),
(66, 'Network Engineer', 'NetWorks Inc.', 'http://www.networksinc.com', 'Tokyo', 'IT/Programming', 'Full-time', '+81345678901', 'jobs@networksinc.com', 90000, 'Any', 'Bachelor', 40, 23, 3, '', 'We are seeking a network engineer to design and implement network solutions.', 1, '1711321822', '2024-04-26', '09:30:00'),
(67, 'Data Analyst', 'DataTech Solutions', 'http://www.datatechsolutions.com', 'Seoul', 'IT/Programming', 'Full-time', '+82234567890', 'careers@datatechsolutions.com', 80000, 'Any', 'Bachelor', 35, 22, 2, '', 'Join our team as a data analyst and help analyze large datasets.', 1, '1711311822', '2024-04-27', '08:00:00'),
(68, 'Project Manager', 'Project Masters Ltd', 'http://www.projectmasters.com', 'Shanghai', 'Management', 'Full-time', '+862134567890', 'info@projectmasters.com', 100000, 'Any', 'Master', 45, 25, 5, '', 'We are hiring a project manager to oversee our projects.', 1, '1711301822', '2024-04-28', '07:30:00'),
(69, 'Quality Assurance Specialist', 'QualityPros Inc.', 'http://www.qualitypros.com', 'Moscow', 'Quality Control/Quality Assurance', 'Full-time', '+74991234567', 'careers@qualitypros.com', 75000, 'Any', 'Bachelor', 35, 21, 2, '', 'We need a quality assurance specialist to ensure product quality.', 1, '1711291822', '2024-04-29', '06:00:00'),
(70, 'Legal Counsel', 'Legal Experts LLC', 'http://www.legalexperts.com', 'Dubai', 'Legal/Law', 'Full-time', '+971234567890', 'info@legalexperts.com', 120000, 'Any', 'Master', 50, 28, 7, '', 'Seeking an experienced legal counsel to provide legal advice.', 1, '1711281822', '2024-04-30', '05:30:00'),
(71, 'UI/UX Designer', 'DesignGenius Ltd', 'http://www.designgenius.com', 'San Francisco', 'Design/Art/Photography', 'Full-time', '+14153332222', 'careers@designgenius.com', 95000, 'Any', 'Bachelor', 40, 24, 4, '', 'We are looking for a talented UI/UX designer to create intuitive user experiences.', 1, '1711271822', '2024-05-01', '04:00:00'),
(72, 'Product Manager', 'ProductPro Inc.', 'http://www.productpro.com', 'Sydney', 'Product Management', 'Full-time', '+61234567890', 'jobs@productpro.com', 110000, 'Any', 'Master', 45, 26, 6, '', 'We are hiring a product manager to drive product development.', 1, '1711261822', '2024-05-02', '03:30:00'),
(73, 'Technical Support Engineer', 'TechSupport Inc.', 'http://www.techsupport.com', 'New York', 'IT/Programming', 'Full-time', '+12125559876', 'careers@techsupport.com', 85000, 'Any', 'Bachelor', 35, 22, 2, '', 'We are seeking a technical support engineer to provide technical assistance.', 1, '1711251822', '2024-05-03', '02:00:00'),
(74, 'Sales Manager', 'SalesGuru Ltd', 'http://www.salesguru.com', 'London', 'Sales/Marketing/Merchandising', 'Full-time', '+447890123456', 'info@salesguru.com', 120000, 'Any', 'Master', 50, 28, 7, '', 'Seeking a dynamic sales manager to lead our sales team.', 1, '1711241822', '2024-05-04', '01:30:00'),
(75, 'Content Manager', 'ContentExperts Inc.', 'http://www.contentexperts.com', 'Paris', 'Writing/Editing', 'Full-time', '+33123456789', 'jobs@contentexperts.com', 90000, 'Any', 'Bachelor', 40, 25, 5, '', 'We are hiring a content manager to oversee content creation.', 1, '1711231822', '2024-05-05', '00:00:00'),
(76, 'HR Assistant', 'HR Solutions Ltd', 'http://www.hrsolutions.com', 'Berlin', 'HR/Recruitment/Training', 'Full-time', '+49304567890', 'info@hrsolutions.com', 60000, 'Any', 'Diploma', 30, 20, 1, '', 'We need an HR assistant to support our HR department.', 1, '1711221822', '2024-05-06', '23:30:00'),
(77, 'Business Analyst', 'Business Solutions Inc.', 'http://www.businesssolutions.com', 'Tokyo', 'Business/Management', 'Full-time', '+81345678901', 'careers@businesssolutions.com', 95000, 'Any', 'Bachelor', 35, 23, 2, '', 'Join our team as a business analyst and help analyze business processes.', 1, '1711211822', '2024-05-07', '22:00:00'),
(78, 'Software Tester', 'TestMasters Ltd', 'http://www.testmasters.com', 'Seoul', 'IT/Programming', 'Full-time', '+82234567890', 'info@testmasters.com', 80000, 'Any', 'Bachelor', 35, 21, 2, '', 'We are seeking a software tester to ensure software quality.', 1, '1711201822', '2024-05-08', '21:30:00'),
(79, 'Digital Marketing Specialist', 'DigitalMarketingPro Inc.', 'http://www.digitalmarketingpro.com', 'Shanghai', 'Sales/Marketing/Merchandising', 'Full-time', '+862134567890', 'careers@digitalmarketingpro.com', 90000, 'Any', 'Bachelor', 40, 24, 4, '', 'We are hiring a digital marketing specialist to develop and implement digital marketing strategies.', 1, '1711191822', '2024-05-09', '20:00:00'),
(80, 'Customer Success Manager', 'CustomerSuccess Inc.', 'http://www.customersuccess.com', 'Moscow', 'Customer Support/Call Centre', 'Full-time', '+74991234567', 'info@customersuccess.com', 85000, 'Any', 'Bachelor', 35, 22, 3, '', 'Seeking a customer success manager to ensure customer satisfaction.', 1, '1711181822', '2024-05-10', '19:30:00'),
(81, 'Frontend Developer', 'FrontendPros Ltd', 'http://www.frontendpros.com', 'Dubai', 'IT/Programming', 'Full-time', '+971234567890', 'jobs@frontendpros.com', 95000, 'Any', 'Bachelor', 35, 23, 2, '', 'Join our team as a frontend developer and build user-friendly interfaces.', 1, '1711171822', '2024-05-11', '18:00:00'),
(82, 'Recruitment Consultant', 'RecruitExperts Ltd', 'http://www.recruitexperts.com', 'San Francisco', 'HR/Recruitment/Training', 'Full-time', '+14153332222', 'info@recruitexperts.com', 80000, 'Any', 'Bachelor', 35, 21, 2, '', 'We are looking for a recruitment consultant to match candidates with job openings.', 1, '1711161822', '2024-05-12', '17:30:00'),
(83, 'Data Scientist', 'DataGenius Inc.', 'http://www.datagenius.com', 'New York', 'IT/Programming', 'Full-time', '+12125559876', 'careers@datagenius.com', 110000, 'Any', 'Master', 40, 25, 5, '', 'We are seeking a data scientist to analyze complex datasets.', 1, '1711151822', '2024-05-13', '16:00:00'),
(84, 'Social Media Manager', 'SocialMediaPro Inc.', 'http://www.socialmediapro.com', 'London', 'Sales/Marketing/Merchandising', 'Full-time', '+447890123456', 'jobs@socialmediapro.com', 90000, 'Any', 'Bachelor', 35, 22, 3, '', 'We are hiring a social media manager to manage our social media presence.', 1, '1711141822', '2024-05-14', '15:30:00'),
(85, 'UX Researcher', 'UXResearch Solutions', 'http://www.uxresearchsolutions.com', 'Paris', 'IT/Programming', 'Full-time', '+33123456789', 'info@uxresearchsolutions.com', 100000, 'Any', 'Master', 40, 24, 4, '', 'Join our team as a UX researcher and conduct user research.', 1, '1711131822', '2024-05-15', '14:00:00'),
(86, 'Technical Writer', 'TechWriters Inc.', 'http://www.techwriters.com', 'Berlin', 'Writing/Editing', 'Full-time', '+49304567890', 'careers@techwriters.com', 80000, 'Any', 'Bachelor', 35, 21, 2, '', 'We are seeking a technical writer to create technical documentation.', 1, '1711121822', '2024-05-16', '13:30:00'),
(87, 'Business Development Manager', 'BizDev Solutions Ltd', 'http://www.bizdevsolutions.com', 'Tokyo', 'Business/Management', 'Full-time', '+81345678901', 'jobs@bizdevsolutions.com', 120000, 'Any', 'Master', 45, 26, 6, '', 'We are hiring a business development manager to drive business growth.', 1, '1711111822', '2024-05-17', '12:00:00'),
(88, 'UI Designer', 'UIDesignPro Inc.', 'http://www.uidesignpro.com', 'Seoul', 'Design/Art/Photography', 'Full-time', '+82234567890', 'info@uidesignpro.com', 85000, 'Any', 'Bachelor', 35, 22, 3, '', 'We are looking for a talented UI designer to create beautiful user interfaces.', 1, '1711101822', '2024-05-18', '11:30:00'),
(89, 'Software Architect', 'SoftArchitects Ltd', 'http://www.softarchitects.com', 'Shanghai', 'IT/Programming', 'Full-time', '+862134567890', 'careers@softarchitects.com', 130000, 'Any', 'Master', 50, 28, 7, '', 'We are seeking a software architect to design scalable software solutions.', 1, '1711091822', '2024-05-19', '10:00:00'),
(90, 'Customer Support Specialist', 'SupportGenius Inc.', 'http://www.supportgenius.com', 'Moscow', 'Customer Support/Call Centre', 'Full-time', '+74991234567', 'jobs@supportgenius.com', 75000, 'Any', 'Bachelor', 35, 20, 2, '', 'Seeking a customer support specialist to assist our customers.', 1, '1711081822', '2024-05-20', '09:30:00'),
(91, 'Marketing Coordinator', 'MarketingPros Inc.', 'http://www.marketingpros.com', 'Dubai', 'Sales/Marketing/Merchandising', 'Full-time', '+971234567890', 'info@marketingpros.com', 80000, 'Any', 'Bachelor', 35, 21, 3, '', 'We are hiring a marketing coordinator to support marketing campaigns.', 1, '1711071822', '2024-05-21', '08:00:00'),
(92, 'System Administrator', 'SystemExperts Ltd', 'http://www.systemexperts.com', 'San Francisco', 'IT/Programming', 'Full-time', '+14153332222', 'careers@systemexperts.com', 90000, 'Any', 'Bachelor', 40, 23, 4, '', 'We are seeking a system administrator to maintain our IT infrastructure.', 1, '1711061822', '2024-05-22', '07:30:00'),
(93, 'Digital Designer', 'DigitalDesign Works', 'http://www.digitaldesignworks.com', 'New York', 'Design/Art/Photography', 'Full-time', '+12125559876', 'info@digitaldesignworks.com', 85000, 'Any', 'Bachelor', 35, 22, 3, '', 'Join our team as a digital designer and create visually stunning designs.', 1, '1711051822', '2024-05-23', '06:00:00'),
(94, 'Operations Manager', 'OperationsPro Inc.', 'http://www.operationspro.com', 'London', 'Management', 'Full-time', '+447890123456', 'jobs@operationspro.com', 100000, 'Any', 'Master', 45, 25, 5, '', 'We are hiring an operations manager to oversee daily operations.', 1, '1711041822', '2024-05-24', '05:30:00'),
(95, 'UX Designer', 'UXDesignWorks Ltd', 'http://www.uxdesignworks.com', 'Paris', 'Design/Art/Photography', 'Full-time', '+33123456789', 'careers@uxdesignworks.com', 90000, 'Any', 'Bachelor', 40, 24, 4, '', 'We are seeking a talented UX designer to create intuitive user experiences.', 1, '1711031822', '2024-05-25', '04:00:00'),
(96, 'Technical Consultant', 'TechConsult Inc.', 'http://www.techconsult.com', 'Berlin', 'IT/Programming', 'Full-time', '+49304567890', 'info@techconsult.com', 110000, 'Any', 'Master', 45, 26, 6, '', 'Join our team as a technical consultant and provide technical expertise.', 1, '1711021822', '2024-05-26', '03:30:00'),
(97, 'Customer Experience Manager', 'CustomerExperiencePro Inc.', 'http://www.customerexperiencepro.com', 'Tokyo', 'Customer Support/Call Centre', 'Full-time', '+81345678901', 'jobs@customerexperiencepro.com', 95000, 'Any', 'Bachelor', 40, 23, 3, '', 'We are hiring a customer experience manager to enhance customer satisfaction.', 1, '1711011822', '2024-05-27', '02:00:00'),
(98, 'Content Strategist', 'ContentStrategy Works', 'http://www.contentstrategyworks.com', 'Seoul', 'Writing/Editing', 'Full-time', '+82234567890', 'info@contentstrategyworks.com', 80000, 'Any', 'Bachelor', 35, 21, 2, '', 'We are seeking a content strategist to develop content strategies.', 1, '1711001822', '2024-05-28', '01:30:00'),
(99, 'IT Manager', 'ITExperts Inc.', 'http://www.itexperts.com', 'Shanghai', 'IT/Programming', 'Full-time', '+862134567890', 'careers@itexperts.com', 120000, 'Any', 'Master', 45, 25, 5, '', 'We are hiring an IT manager to oversee our IT department.', 1, '1710991822', '2024-05-29', '00:00:00'),
(100, 'Sales Representative', 'SalesWorks Ltd', 'http://www.salesworks.com', 'Moscow', 'Sales/Marketing/Merchandising', 'Full-time', '+74991234567', 'jobs@salesworks.com', 70000, 'Any', 'Bachelor', 35, 20, 2, '', 'We are hiring sales representatives to promote our products.', 1, '1710981822', '2024-05-30', '22:30:00'),
(101, 'Marketing Analyst', 'MarketingAnalysis Ltd', 'http://www.marketinganalysis.com', 'Dubai', 'Sales/Marketing/Merchandising', 'Full-time', '+971234567890', 'info@marketinganalysis.com', 85000, 'Any', 'Bachelor', 35, 22, 3, '', 'Join our team as a marketing analyst and analyze marketing data.', 1, '1710971822', '2024-05-31', '21:00:00'),
(102, 'Backend Developer', 'BackendGenius Inc.', 'http://www.backendgenius.com', 'San Francisco', 'IT/Programming', 'Full-time', '+14153332222', 'careers@backendgenius.com', 100000, 'Any', 'Bachelor', 40, 24, 4, '', 'We are seeking a backend developer to build server-side logic.', 1, '1710961822', '2024-06-01', '19:30:00'),
(103, 'Marketing Assistant', 'MarketingAssist Ltd', 'http://www.marketingassist.com', 'New York', 'Sales/Marketing/Merchandising', 'Full-time', '+12125559876', 'info@marketingassist.com', 60000, 'Any', 'Diploma', 30, 18, 1, '', 'We are hiring a marketing assistant to support marketing activities.', 1, '1710951822', '2024-06-02', '18:00:00'),
(104, 'IT Consultant', 'ITConsultingPro Inc.', 'http://www.itconsultingpro.com', 'London', 'IT/Programming', 'Full-time', '+447890123456', 'jobs@itconsultingpro.com', 110000, 'Any', 'Master', 40, 25, 5, '', 'Join our team as an IT consultant and provide expert advice.', 1, '1710941822', '2024-06-03', '16:30:00'),
(105, 'Software Engineer', 'ABC Tech', 'http://www.abctech.com', 'San Francisco, CA', 'Technology', 'Full-time', '+1 (555) 123-4567', 'contact@abctech.com', 8000, NULL, 'Bachelor\'s degree', 40, 25, 5, '', 'We are seeking a skilled Software Engineer to join our team.', 1, '1710931822', '2024-05-01', '18:00:00'),
(106, 'Marketing Manager', 'XYZ Marketing', 'http://www.xyzmarketing.com', 'New York, NY', 'Marketing', 'Full-time', '+1 (555) 234-5678', 'contact@xyzmarketing.com', 7000, NULL, 'Bachelor\'s degree', 35, 28, 4, '', 'We are hiring a Marketing Manager to develop and execute marketing strategies.', 1, '1710921822', '2024-05-01', '18:00:00'),
(107, 'Data Analyst', 'Data Insights Inc.', 'http://www.datainsights.com', 'Chicago, IL', 'Data Analysis', 'Full-time', '+1 (555) 345-6789', 'contact@datainsights.com', 6000, NULL, 'Bachelor\'s degree', 32, 24, 3, '', 'We are looking for a Data Analyst to interpret and analyze data.', 1, '1710911822', '2024-05-01', '18:00:00'),
(108, 'Graphic Designer', 'Creative Solutions', 'http://www.creativesolutions.com', 'Los Angeles, CA', 'Design', 'Full-time', '+1 (555) 456-7890', 'contact@creativesolutions.com', 6000, NULL, 'Associate degree', 30, 22, 2, '', 'Creative Solutions is seeking a talented Graphic Designer to join our team.', 1, '1710901822', '2024-05-01', '18:00:00'),
(109, 'Project Manager', 'Swift Projects Ltd.', 'http://www.swiftprojects.com', 'Houston, TX', 'Project Management', 'Full-time', '+1 (555) 567-8901', 'contact@swiftprojects.com', 7000, NULL, 'Bachelor\'s degree', 35, 28, 4, '', 'We are hiring a Project Manager to oversee various projects.', 1, '1710891822', '2024-05-01', '18:00:00'),
(110, 'Financial Analyst', 'Finance Experts LLC', 'http://www.financeexperts.com', 'Seattle, WA', 'Finance', 'Full-time', '+1 (555) 678-9012', 'contact@financeexperts.com', 6500, NULL, 'Bachelor\'s degree', 33, 25, 3, '', 'We are seeking a Financial Analyst to provide financial guidance.', 1, '1710881822', '2024-05-01', '18:00:00'),
(111, 'Human Resources Manager', 'HR Solutions Inc.', 'http://www.hrsolutions.com', 'Miami, FL', 'Human Resources', 'Full-time', '+1 (555) 789-0123', 'contact@hrsolutions.com', 6500, NULL, 'Bachelor\'s degree', 33, 25, 3, '', 'We are hiring an HR Manager to oversee our HR department.', 1, '1710871822', '2024-05-01', '18:00:00'),
(112, 'Sales Representative', 'SalesForce Ltd.', 'http://www.salesforce.com', 'Boston, MA', 'Sales', 'Full-time', '+1 (555) 890-1234', 'contact@salesforce.com', 5500, NULL, 'High school diploma', 28, 20, 1, '', 'We are looking for a Sales Representative to join our sales team.', 1, '1710861822', '2024-05-01', '18:00:00'),
(113, 'Customer Service Representative', 'Service Pros Inc.', 'http://www.servicepros.com', 'Atlanta, GA', 'Customer Service', 'Full-time', '+1 (555) 901-2345', 'contact@servicepros.com', 5000, NULL, 'High school diploma', 26, 18, 1, '', 'We are seeking a Customer Service Representative to assist our clients.', 1, '1710851822', '2024-05-01', '18:00:00'),
(114, 'Operations Manager', 'Operational Excellence Inc.', 'http://www.opexcellence.com', 'Dallas, TX', 'Operations', 'Full-time', '+1 (555) 012-3456', 'contact@opexcellence.com', 7000, NULL, 'Bachelor\'s degree', 35, 28, 4, '', 'We are hiring an Operations Manager to oversee our daily operations.', 1, '1710841822', '2024-05-01', '18:00:00'),
(115, 'Software Engineer', 'Tech Solutions Ltd.', 'http://www.techsolutions.com', 'San Francisco, CA', 'Technology', 'Full-time', '+1 (555) 123-4567', 'contact@techsolutions.com', 8000, NULL, 'Bachelor\'s degree', 40, 25, 5, '', 'We are seeking a skilled Software Engineer to join our team.', 1, '1710831822', '2024-05-01', '18:00:00'),
(116, 'Marketing Coordinator', 'Brand Innovations Inc.', 'http://www.brandinnovations.com', 'New York, NY', 'Marketing', 'Full-time', '+1 (555) 234-5678', 'contact@brandinnovations.com', 5500, NULL, 'Bachelor\'s degree', 30, 22, 2, '', 'We are hiring a Marketing Coordinator to support our marketing efforts.', 1, '1710821822', '2024-05-01', '18:00:00'),
(117, 'Data Scientist', 'Data Insights Inc.', 'http://www.datainsights.com', 'Chicago, IL', 'Data Science', 'Full-time', '+1 (555) 345-6789', 'contact@datainsights.com', 7000, NULL, 'Master\'s degree', 35, 28, 4, '', 'Data Insights Inc. is seeking a talented Data Scientist to join our team.', 1, '1710811822', '2024-05-01', '18:00:00'),
(118, 'UI/UX Designer', 'Design Solutions Ltd.', 'http://www.designsolutions.com', 'Los Angeles, CA', 'Design', 'Full-time', '+1 (555) 456-7890', 'contact@designsolutions.com', 6500, NULL, 'Bachelor\'s degree', 33, 25, 3, '', 'Design Solutions Ltd. is looking for a creative UI/UX Designer.', 1, '1710801822', '2024-05-01', '18:00:00'),
(119, 'Project Coordinator', 'Swift Projects Ltd.', 'http://www.swiftprojects.com', 'Houston, TX', 'Project Management', 'Full-time', '+1 (555) 567-8901', 'contact@swiftprojects.com', 5500, NULL, 'Bachelor\'s degree', 30, 22, 2, '', 'We are seeking a Project Coordinator to support project management.', 1, '1710791822', '2024-05-01', '18:00:00'),
(120, 'Financial Advisor', 'Finance Experts LLC', 'http://www.financeexperts.com', 'Seattle, WA', 'Finance', 'Full-time', '+1 (555) 678-9012', 'contact@financeexperts.com', 6000, NULL, 'Bachelor\'s degree', 32, 24, 3, '', 'Finance Experts LLC is hiring a Financial Advisor to provide financial advice.', 1, '1710781822', '2024-05-01', '18:00:00'),
(121, 'HR Coordinator', 'HR Solutions Inc.', 'http://www.hrsolutions.com', 'Miami, FL', 'Human Resources', 'Full-time', '+1 (555) 789-0123', 'contact@hrsolutions.com', 5500, NULL, 'Bachelor\'s degree', 30, 22, 2, '', 'We are hiring an HR Coordinator to support our HR department.', 1, '1710771822', '2024-05-01', '18:00:00'),
(122, 'Sales Manager', 'SalesForce Ltd.', 'http://www.salesforce.com', 'Boston, MA', 'Sales', 'Full-time', '+1 (555) 890-1234', 'contact@salesforce.com', 7000, NULL, 'Bachelor\'s degree', 35, 28, 4, '', 'We are seeking a Sales Manager to lead our sales team.', 1, '1710761822', '2024-05-01', '18:00:00'),
(123, 'Customer Support Specialist', 'Service Pros Inc.', 'http://www.servicepros.com', 'Atlanta, GA', 'Customer Service', 'Full-time', '+1 (555) 901-2345', 'contact@servicepros.com', 5000, NULL, 'High school diploma', 26, 18, 1, '', 'Service Pros Inc. is seeking a Customer Support Specialist.', 1, '1710751822', '2024-05-01', '18:00:00'),
(124, 'Operations Coordinator', 'Operational Excellence Inc.', 'http://www.opexcellence.com', 'Dallas, TX', 'Operations', 'Full-time', '+1 (555) 012-3456', 'contact@opexcellence.com', 6000, NULL, 'Bachelor\'s degree', 32, 24, 3, '', 'We are hiring an Operations Coordinator to support our daily operations.', 1, '1710741822', '2024-05-01', '18:00:00'),
(125, 'Software Developer', 'Tech Solutions Ltd.', 'http://www.techsolutions.com', 'San Francisco, CA', 'Technology', 'Full-time', '+1 (555) 123-4567', 'contact@techsolutions.com', 7500, NULL, 'Bachelor\'s degree', 38, 27, 4, '', 'We are seeking a skilled Software Developer to join our team.', 1, '1710731822', '2024-05-01', '18:00:00'),
(126, 'Brand Manager', 'Brand Innovations Inc.', 'http://www.brandinnovations.com', 'New York, NY', 'Marketing', 'Full-time', '+1 (555) 234-5678', 'contact@brandinnovations.com', 6500, NULL, 'Bachelor\'s degree', 33, 25, 3, '', 'We are hiring a Brand Manager to manage our brand identity.', 1, '1710721822', '2024-05-01', '18:00:00'),
(127, 'Machine Learning Engineer', 'Data Insights Inc.', 'http://www.datainsights.com', 'Chicago, IL', 'Data Science', 'Full-time', '+1 (555) 345-6789', 'contact@datainsights.com', 8000, NULL, 'Master\'s degree', 40, 25, 5, '', 'We are looking for a Machine Learning Engineer to develop ML algorithms.', 1, '1710711822', '2024-05-01', '18:00:00'),
(128, 'Web Designer', 'Design Solutions Ltd.', 'http://www.designsolutions.com', 'Los Angeles, CA', 'Design', 'Full-time', '+1 (555) 456-7890', 'contact@designsolutions.com', 6000, NULL, 'Bachelor\'s degree', 32, 24, 3, '', 'We are seeking a Web Designer to create visually appealing websites.', 1, '1710701822', '2024-05-01', '18:00:00'),
(129, 'Project Assistant', 'Swift Projects Ltd.', 'http://www.swiftprojects.com', 'Houston, TX', 'Project Management', 'Full-time', '+1 (555) 567-8901', 'contact@swiftprojects.com', 5000, NULL, 'Associate degree', 28, 20, 1, '', 'We are hiring a Project Assistant to assist with project tasks.', 1, '1710691822', '2024-05-01', '18:00:00'),
(130, 'Financial Planner', 'Finance Experts LLC', 'http://www.financeexperts.com', 'Seattle, WA', 'Finance', 'Full-time', '+1 (555) 678-9012', 'contact@financeexperts.com', 7000, NULL, 'Bachelor\'s degree', 35, 28, 4, '', 'We are seeking a Financial Planner to help clients with financial planning.', 1, '1710681822', '2024-05-01', '18:00:00'),
(131, 'HR Assistant', 'HR Solutions Inc.', 'http://www.hrsolutions.com', 'Miami, FL', 'Human Resources', 'Full-time', '+1 (555) 789-0123', 'contact@hrsolutions.com', 5000, NULL, 'Associate degree', 28, 20, 1, '', 'We are hiring an HR Assistant to support our HR department.', 1, '1710671822', '2024-05-01', '18:00:00'),
(132, 'Account Manager', 'SalesForce Ltd.', 'http://www.salesforce.com', 'Boston, MA', 'Sales', 'Full-time', '+1 (555) 890-1234', 'contact@salesforce.com', 6500, NULL, 'Bachelor\'s degree', 33, 25, 3, '', 'We are seeking an Account Manager to manage client accounts.', 1, '1710661822', '2024-05-01', '18:00:00'),
(133, 'Call Center Representative', 'Service Pros Inc.', 'http://www.servicepros.com', 'Atlanta, GA', 'Customer Service', 'Full-time', '+1 (555) 901-2345', 'contact@servicepros.com', 4500, NULL, 'High school diploma', 24, 16, 0, '', 'We are seeking a Call Center Representative to handle customer inquiries.', 1, '1710651822', '2024-05-01', '18:00:00'),
(134, 'Operations Analyst', 'Operational Excellence Inc.', 'http://www.opexcellence.com', 'Dallas, TX', 'Operations', 'Full-time', '+1 (555) 012-3456', 'contact@opexcellence.com', 6000, NULL, 'Bachelor\'s degree', 32, 24, 3, '', 'We are hiring an Operations Analyst to analyze operational data.', 1, '1710641822', '2024-05-01', '18:00:00'),
(135, 'Software Architect', 'Tech Solutions Ltd.', 'http://www.techsolutions.com', 'San Francisco, CA', 'Technology', 'Full-time', '+1 (555) 123-4567', 'contact@techsolutions.com', 8500, NULL, 'Master\'s degree', 40, 25, 5, '', 'We are seeking a Software Architect to design software solutions.', 1, '1710631822', '2024-05-01', '18:00:00'),
(136, 'Marketing Specialist', 'Brand Innovations Inc.', 'http://www.brandinnovations.com', 'New York, NY', 'Marketing', 'Full-time', '+1 (555) 234-5678', 'contact@brandinnovations.com', 6000, NULL, 'Bachelor\'s degree', 32, 24, 3, '', 'We are hiring a Marketing Specialist to execute marketing campaigns.', 1, '1710621822', '2024-05-01', '18:00:00'),
(137, 'Data Engineer', 'Data Insights Inc.', 'http://www.datainsights.com', 'Chicago, IL', 'Data Science', 'Full-time', '+1 (555) 345-6789', 'contact@datainsights.com', 7500, NULL, 'Bachelor\'s degree', 38, 27, 4, '', 'We are looking for a Data Engineer to build data pipelines.', 1, '1710611822', '2024-05-01', '18:00:00');
INSERT INTO `job` (`id`, `title`, `company`, `company_url`, `location`, `category`, `job_type`, `contact_number`, `contact_email`, `monthly_pay`, `preferred_gender`, `minimum_qualification_level`, `maximum_age`, `minimum_age`, `minimum_years_experience`, `banner_image`, `description`, `posted_by`, `created_at`, `closing_date`, `closing_time`) VALUES
(138, 'UX Designer', 'Design Solutions Ltd.', 'http://www.designsolutions.com', 'Los Angeles, CA', 'Design', 'Full-time', '+1 (555) 456-7890', 'contact@designsolutions.com', 6500, NULL, 'Bachelor\'s degree', 33, 25, 3, '', 'Design Solutions Ltd. is seeking a UX Designer to improve user experience.', 1, '1710601822', '2024-05-01', '18:00:00'),
(139, 'Assistant Project Manager', 'Swift Projects Ltd.', 'http://www.swiftprojects.com', 'Houston, TX', 'Project Management', 'Full-time', '+1 (555) 567-8901', 'contact@swiftprojects.com', 5500, NULL, 'Bachelor\'s degree', 30, 22, 2, '', 'We are hiring an Assistant Project Manager to assist with project management.', 1, '1710591822', '2024-05-01', '18:00:00'),
(140, 'Financial Analyst', 'Finance Experts LLC', 'http://www.financeexperts.com', 'Seattle, WA', 'Finance', 'Full-time', '+1 (555) 678-9012', 'contact@financeexperts.com', 6500, NULL, 'Bachelor\'s degree', 33, 25, 3, '', 'We are seeking a Financial Analyst to provide financial analysis.', 1, '1710581822', '2024-05-01', '18:00:00'),
(141, 'Recruiter', 'HR Solutions Inc.', 'http://www.hrsolutions.com', 'Miami, FL', 'Human Resources', 'Full-time', '+1 (555) 789-0123', 'contact@hrsolutions.com', 5500, NULL, 'Bachelor\'s degree', 30, 22, 2, '', 'We are hiring a Recruiter to find and hire talented individuals.', 1, '1710571822', '2024-05-01', '18:00:00'),
(142, 'Account Executive', 'SalesForce Ltd.', 'http://www.salesforce.com', 'Boston, MA', 'Sales', 'Full-time', '+1 (555) 890-1234', 'contact@salesforce.com', 7000, NULL, 'Bachelor\'s degree', 35, 28, 4, '', 'We are seeking an Account Executive to manage client accounts.', 1, '1710561822', '2024-05-01', '18:00:00'),
(143, 'Technical Support Specialist', 'Service Pros Inc.', 'http://www.servicepros.com', 'Atlanta, GA', 'Customer Service', 'Full-time', '+1 (555) 901-2345', 'contact@servicepros.com', 5500, NULL, 'Associate degree', 30, 22, 2, '', 'We are seeking a Technical Support Specialist to provide technical assistance.', 1, '1710551822', '2024-05-01', '18:00:00'),
(144, 'Supply Chain Manager', 'Operational Excellence Inc.', 'http://www.opexcellence.com', 'Dallas, TX', 'Operations', 'Full-time', '+1 (555) 012-3456', 'contact@opexcellence.com', 7000, NULL, 'Bachelor\'s degree', 35, 28, 4, '', 'We are hiring a Supply Chain Manager to optimize our supply chain.', 1, '1710541822', '2024-05-01', '18:00:00'),
(145, 'Senior Software Engineer', 'Tech Solutions Ltd.', 'http://www.techsolutions.com', 'San Francisco, CA', 'Technology', 'Full-time', '+1 (555) 123-4567', 'contact@techsolutions.com', 9000, NULL, 'Master\'s degree', 45, 30, 6, '', 'We are seeking a Senior Software Engineer to lead our software development.', 1, '1710531822', '2024-05-01', '18:00:00'),
(146, 'Content Manager', 'Brand Innovations Inc.', 'http://www.brandinnovations.com', 'New York, NY', 'Marketing', 'Full-time', '+1 (555) 234-5678', 'contact@brandinnovations.com', 7000, NULL, 'Bachelor\'s degree', 35, 28, 4, '', 'We are hiring a Content Manager to oversee content creation.', 1, '1710521822', '2024-05-01', '18:00:00'),
(147, 'Machine Learning Specialist', 'Data Insights Inc.', 'http://www.datainsights.com', 'Chicago, IL', 'Data Science', 'Full-time', '+1 (555) 345-6789', 'contact@datainsights.com', 8500, NULL, 'Master\'s degree', 40, 25, 5, '', 'We are looking for a Machine Learning Specialist to develop ML models.', 1, '1710511822', '2024-05-01', '18:00:00'),
(148, 'Frontend Developer', 'Design Solutions Ltd.', 'http://www.designsolutions.com', 'Los Angeles, CA', 'Design', 'Full-time', '+1 (555) 456-7890', 'contact@designsolutions.com', 7000, NULL, 'Bachelor\'s degree', 35, 28, 4, '', 'Design Solutions Ltd. is seeking a Frontend Developer to build user interfaces.', 1, '1710501822', '2024-05-01', '18:00:00'),
(149, 'Assistant Project Coordinator', 'Swift Projects Ltd.', 'http://www.swiftprojects.com', 'Houston, TX', 'Project Management', 'Full-time', '+1 (555) 567-8901', 'contact@swiftprojects.com', 5000, NULL, 'High school diploma', 26, 18, 1, '', 'We are hiring an Assistant Project Coordinator to support project management.', 1, '1710491822', '2024-05-01', '18:00:00'),
(150, 'Financial Controller', 'Finance Experts LLC', 'http://www.financeexperts.com', 'Seattle, WA', 'Finance', 'Full-time', '+1 (555) 678-9012', 'contact@financeexperts.com', 7500, NULL, 'Bachelor\'s degree', 38, 27, 4, '', 'We are seeking a Financial Controller to manage financial operations.', 1, '1710481822', '2024-05-01', '18:00:00'),
(151, 'HR Generalist', 'HR Solutions Inc.', 'http://www.hrsolutions.com', 'Miami, FL', 'Human Resources', 'Full-time', '+1 (555) 789-0123', 'contact@hrsolutions.com', 6000, NULL, 'Bachelor\'s degree', 32, 24, 3, '', 'We are hiring an HR Generalist to handle various HR duties.', 1, '1710471822', '2024-05-01', '18:00:00'),
(152, 'Sales Coordinator', 'SalesForce Ltd.', 'http://www.salesforce.com', 'Boston, MA', 'Sales', 'Full-time', '+1 (555) 890-1234', 'contact@salesforce.com', 6500, NULL, 'Bachelor\'s degree', 33, 25, 3, '', 'We are hiring a Sales Coordinator to support our sales team.', 1, '1710461822', '2024-05-01', '18:00:00'),
(153, 'Customer Success Manager', 'Service Pros Inc.', 'http://www.servicepros.com', 'Atlanta, GA', 'Customer Service', 'Full-time', '+1 (555) 901-2345', 'contact@servicepros.com', 6000, NULL, 'Bachelor\'s degree', 32, 24, 3, '', 'We are seeking a Customer Success Manager to ensure customer satisfaction.', 1, '1710451822', '2024-05-01', '18:00:00'),
(154, 'Operations Supervisor', 'Operational Excellence Inc.', 'http://www.opexcellence.com', 'Dallas, TX', 'Operations', 'Full-time', '+1 (555) 012-3456', 'contact@opexcellence.com', 6500, NULL, 'Bachelor\'s degree', 33, 25, 3, '', 'We are hiring an Operations Supervisor to oversee our operations team.', 1, '1710441822', '2024-05-01', '18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `cover_letter` text NOT NULL,
  `cv` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `applied_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `seen` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_applications`
--

INSERT INTO `job_applications` (`id`, `user_id`, `job_id`, `cover_letter`, `cv`, `name`, `email`, `contact`, `applied_at`, `seen`) VALUES
(1, 2, 1, 'hi i would like to apply for this job position.', '6612bb7e18c4e_fake CV.pdf', 'John Hank', 'john@gmail.com', '07123456789', '2024-04-07 15:27:58', 0),
(2, 2, 3, 'Hi im interested in  your job listing.', '6612bbd63a470_fake CV.pdf', 'John Hank', 'john@gmail.com', '070123456789', '2024-04-07 15:29:26', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'gihon', '$2y$10$4KUSU0CgCZj1pJEwTGyKHOfqtrLN5EVo1/.BkN3RPd6VrF5LrZVUK'),
(2, 'John', '$2y$10$DOlz4zmSstuvSyWkjIkEP.wSv11T5aYUJK4IQ0jA7EaeLw19IxDT6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `job_applications`
--
ALTER TABLE `job_applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
