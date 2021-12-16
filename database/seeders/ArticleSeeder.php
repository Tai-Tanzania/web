<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use Carbon\Carbon;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'title' => 'Young Njaro proves the future is accessible',
            'body' => 'In light of the pandemic, people’s lives have change drastically. For persons living with disabilities, COVID – 19 has yet again struck a barrier. In a situation where marginalization, discrimination, vulnerability and exploitation are every day factors for many people, the increased risk of poor outcomes have been magnified with the reduced access to routine health care and rehabilitation services, more pronounced social isolation, poorly tailored public health messaging, inadequately constructed mental health services, and a lack of emergency preparedness for people with special needs. The International Day of Persons with Disabilities dawns with a story. A young girl with Albinism proving her ability to innovate contraptions to her community, without regard to her physical impairment as opposed to the misconception held by the members of her society. As this year’s theme speculates, “Leadership and participation of persons with disabilities toward an inclusive, accessible and sustainable post-COVID-19 world”, the story of Njaro Chara marks a declaration to every member of the community to acknowledge people living with disabilities in their own right. Tai Tanzania adeptly fashioned an animated film NIVUSHE as a part of our Mwangaza Series (an animation series with key focus on people living with disabilities) to create awareness about the challenges that affect people with disabilities in order to decrease negative attitude and stigma towards people living with disabilities in Tanzania. As a youth led NGO that utilizes innovative storytelling through 3D animations, this film is one of the many others that inspire Positive Behavioral Change in our societies, especially when it comes to people living with disabilities. NIVUSHE aimed at raising awareness on the challenges that people with albinism face in their community and their education endeavor. This project was funded by United States African Development Foundation and Segal Family Foundation proved an immediate success when the first part of the film was launched early February, 2021. The society had positive remarks to the key issues addressed about people with albinism, and the need to raise awareness on how to relate to them. The second part of Nivushe 2 was launched on 2nd December, 2021 at the Residency of The Ambassador of the United States, Hon. Donald Wright, who was represented by the Deputy Chief of Mission, Mr Robert Raines. In attendance were a few of the stakeholders who advocate for people with disabilities, government representatives and representatives from International Organizations like USAID, UNDC and more. Like its predecessor, Nivushe 2 was amiably received by the guests, with memorable comments from a representative of Peace Life for Persons with Disabilities Foundation, Sophia Mbeyela who says, “People with disabilities can achieve their dreams. Empowerment does not start with lamentation; it starts with actions. As a teacher, I teach differently compared to the rest, that way I can bring the Government to attention what I lack from how I have been teaching the students. Take the initiative to achieve your dream so that others can empower you”.  One of our keynote speakers, Ms Irene George, talked of how the story of Njaro accurately depicted her life growing up, as a person with albinism.',
            'published_date' => Carbon::now()->toDateTimeString(),
            'featured_image' => 'assets/images/blog/NIVUSHE-New-POSTER-1536x2048.jpeg'
        ]);

        Article::create([
            'title' => 'Empowering the girl child in the digital generation',
            'published_date' => Carbon::now()->toDateTimeString(),
            'body' => 'On the International Day of the Girl Child, we celebrate young girls worldwide, hoping to empower them to be just as courageous to take that step in achieving their dreams. Gone are the days where opportunity for growth and talent is favored and provided only to the boy. In this current world, girls are as equal as boys, in accessing education, taking leadership and professions that were once unavailable for them. On 11th October 2021, the commemoration of the day of the girl child was prepared by the collaboration of various stakeholders under the lead of Bright Jamii Initiative and was held at Hyatt Regency Dar es Salaam with the attendance of important stakeholders like the Ministry of Health, international organizations like UNFPA, Plan International Tanzania, Save the Children, and many other advocating organizations that support the girl child.

            The theme this year, “Digital generation. Our generation”, inspires the need for girls’ empowerment in the digital world that we currently live in. As advocates and stakeholders of the girl child’s future, it is important to delve into how we can encourage the young girl access to opportunities be just as equal as the young boy as we transition into a digital realm. We had the honour of screening our innovative short film Nivushe, a story about a young girl with albinism, Njaro, a dreamer and innovator who pursues her goals in a challenging community.

            The commemoration included a panel discussion amongst different stakeholders on acknowledging the challenges the girl child faces as well as the importance of creating safe environment for young girls to explore the digital space, the opportunities the girl child can tap into and how to equally accommodate these girls in the digital era. The guest of honour was the Deputy Minister of Health, Hon. Mwanaidi Ally Khamis encouraged on the need to invest our efforts on ensuring young girls have just as much privilege on the digital age. Tai Tanzania was not left behind in the commemoration.

            The Chairperson of the Children’s Council Tanzania, Nancy, urged the government to keep improving digital services, especially for the girl child by empowering her access to tools like smartphones and laptops which will help her to study.
            
            Dear Girl Child, this is a digital generation and you are our generation!',
            'featured_image' => 'assets/images/blog/happychild.jpeg'
        ]);

        Article::create([
            'title' => 'Coming together to tackle Gender-Based Violence in Tanzania',
            'published_date' => Carbon::now()->toDateTimeString(),
            'body' => 'On the 2nd of July 2021, Tai Tanzania was named one of the recipients of the funding under the UNFPA iAccelerator project scale up. Tai Tanzania’s Harakati Za Ngeti Animated Series which raises awareness and changes mindsets about Sexual Reproductive Health, Gender-Based Violence (GBV) and other various issues which derail a young person’s academic journey, was found to be an effective tool to fight these challenges. 

            Violence against women is one of the most common human rights violations. GBV deteriorates the mental and physical health of its victims. UNFPA is one of the UN’s lead agencies working to further gender equality and women’s empowerment, and to address the physical and emotional consequences of GBV. This is why through the $50,000 fund Tai Tanzania will receive from UNFPA is aimed at creating two 3D animations which will educate the Tanzanian community about GBV. This project aligns with SDG no. 5: Gender equality and aims at tackling challenges faced by adolescent girls and young women (AGYW), especially issues related to discrimination and Gender-Based Violence in education and/or society.  In view of that, the Country Representative of UNFPA Tanzania, Ms. Jacqueline Mahon, and her the UNFPA Team in Tanzania, visited the Tai Tanzania office to hand over and officially launch the Harakati Za Ngeti project. The project will continue UNFPA’s agenda in the current regions the agency operates in. 

            In addition, the program sets to raise the opportunity bar to provide skill cultivation in 3D animation to bright young women. Tai Tanzania will host an animation training program for five female animators who will then be a part of the team producing the project’s animations. In its essence. The two new episodes of the Harakati Za Ngeti series expect to be launched within the 16 days of Activism against Gender-Based Violence which begin on the 25th of November to the 10th of December. We are looking forward to bringing immeasurable impact that will set the platform for reducing gender inequality in accessing education and in our societies. 

            To know more about Tai Tanzania and our use of storytelling for social behavioural change, visit our website www.tai.or.tz.',
            'featured_image' => 'assets/images/blog/cheque.jpeg'
        ]);
    }
}
