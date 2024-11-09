<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Service;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Service::create([
            'title' => 'Hukuki Danışmanlık',
            'description' => 'Müşterilerimize hukuki danışmanlık hizmetleri sunuyoruz.',
            'photo' => 'service/legal-advice.png',
        ]);

        Service::create([
            'title' => 'Dava Takibi',
            'description' => 'Dava süreçlerinizi profesyonel bir şekilde takip ediyoruz.',
            'photo' => 'service/case-follow-up.png',
        ]);

        Service::create([
            'title' => 'Sözleşme Hazırlama',
            'description' => 'Profesyonel sözleşme hazırlama hizmetleri sunuyoruz.',
            'photo' => 'service/contract-preparation.png',
        ]);

        Service::create([
            'title' => 'Miras Hukuku',
            'description' => 'Miras hukuku ile ilgili danışmanlık ve dava hizmetleri sunuyoruz.',
            'photo' => 'service/inheritance-law.png',
        ]);

        Service::create([
            'title' => 'İş Hukuku',
            'description' => 'İş hukuku ile ilgili danışmanlık ve dava hizmetleri sunuyoruz.',
            'photo' => 'service/labor-law.png',
        ]);

        Service::create([
            'title' => 'Ticaret Hukuku',
            'description' => 'Ticaret hukuku ile ilgili danışmanlık ve dava hizmetleri sunuyoruz.',
            'photo' => 'service/commercial-law.png',
        ]);

        Service::create([
            'title' => 'Ceza Hukuku',
            'description' => 'Ceza hukuku ile ilgili danışmanlık ve dava hizmetleri sunuyoruz.',
            'photo' => 'service/criminal-law.png',
        ]);

        Service::create([
            'title' => 'Aile Hukuku',
            'description' => 'Aile hukuku ile ilgili danışmanlık ve dava hizmetleri sunuyoruz.',
            'photo' => 'service/family-law.png',
        ]);

        Service::create([
            'title' => 'Gayrimenkul Hukuku',
            'description' => 'Gayrimenkul hukuku ile ilgili danışmanlık ve dava hizmetleri sunuyoruz.',
            'photo' => 'service/real-estate-law.png',
        ]);

        Service::create([
            'title' => 'Tüketici Hukuku',
            'description' => 'Tüketici hukuku ile ilgili danışmanlık ve dava hizmetleri sunuyoruz.',
            'photo' => 'service/consumer-law.png',
        ]);

        Service::create([
            'title' => 'Kişisel Verilerin Korunması (KVKK)',
            'description' => '6698 Sayılı Kişisel Verilerin Korunması Kanunu’na uyumluluğun sağlanması için, gerçek veya tüzel kişi veri sorumlularına özel uyum projeleri yürütmekteyiz. Gerektiğinde ve talep halinde bu alanda faaliyet gösteren teknik çözüm ortaklarımızla koordineli olarak çalışmakta ve hukuki danışmanlık sağlamaktayız.',
            'photo' => 'service/personal-data-protection-law.png',
        ]);

        Service::create([
            'title' => 'Bilişim Hukuku',
            'description' => 'Bilişim hukuku ile ilgili danışmanlık ve dava hizmetleri sunuyoruz.',
            'photo' => 'service/information-technology-law.png',
        ]);

        Service::create([
            'title' => 'İş ve Sosyal Güvenlik Hukuku',
            'description' => 'İş ve sosyal güvenlik hukuku ile ilgili danışmanlık ve dava hizmetleri sunuyoruz.',
            'photo' => 'service/labor-and-social-security-law.png',
        ]);

        Service::create([
            'title' => 'İcra ve İflas Hukuku',
            'description' => 'İcra ve iflas hukuku ile ilgili danışmanlık ve dava hizmetleri sunuyoruz.',
            'photo' => 'service/execution-and-bankruptcy-law.png',
        ]);

        Service::create([
            'title' => 'Şirketler Hukuku ve Kurumsal Yönetim',
            'description' => 'Şirketler hukuku ve kurumsal yönetim ile ilgili danışmanlık ve dava hizmetleri sunuyoruz.',
            'photo' => 'service/corporate-law-and-governance.png',
        ]);

        Service::create([
            'title' => 'Bankacılık ve Finans Hukuku',
            'description' => 'Bankacılık ve finans hukuku ile ilgili danışmanlık ve dava hizmetleri sunuyoruz.',
            'photo' => 'service/banking-and-finance-law.png',
        ]);

        Service::create([
            'title' => 'Basın ve Medya Hukuku',
            'description' => 'Basın ve medya hukuku ile ilgili danışmanlık ve dava hizmetleri sunuyoruz.',
            'photo' => 'service/media-law.png',
        ]);

        Service::create([
            'title' => 'Fikri Mülkiyet Hukuku',
            'description' => 'Fikri mülkiyet hukuku ile ilgili danışmanlık ve dava hizmetleri sunuyoruz.',
            'photo' => 'service/intellectual-property-law.png',
        ]);

        Service::create([
            'title' => 'Yabancılar ve Vatandaşlık Hukuku',
            'description' => 'Yabancılar ve vatandaşlık hukuku ile ilgili danışmanlık ve dava hizmetleri sunuyoruz.',
            'photo' => 'service/immigration-and-citizenship-law.png',
        ]);

        Service::create([
            'title' => 'İdare ve Vergi Hukuku',
            'description' => 'İdare ve vergi hukuku ile ilgili danışmanlık ve dava hizmetleri sunuyoruz.',
            'photo' => 'service/administrative-and-tax-law.png',
        ]);

        Service::create([
            'title' => 'Tahkim & Dava Takibi',
            'description' => 'Tahkim ve dava takibi ile ilgili danışmanlık ve dava hizmetleri sunuyoruz.',
            'photo' => 'service/arbitration-and-litigation.png',
        ]);

        // Add more services as needed
    }
}
