<?php

namespace App\Services\Csp\Policies;

use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Basic;

class CustomPolicies extends Basic
{
    public function configure()
    {
        parent::configure();

        $this->addGeneralDirectives();
        $this->addDirectivesForGoogleFonts();
        $this->addDirectivesForGoogleAnalytics();
        $this->addDirectivesForGoogleTagManager();
        $this->addDirectivesForFacebookChatPlugin();
    }

    protected function addGeneralDirectives()
    {
        return $this->addDirective(Directive::BASE, 'self')
            ->addNonceForDirective(Directive::SCRIPT)
            ->addDirective(Directive::SCRIPT, [
                'christoph-rumpel.com',
                'christoph-rumpel.test',
            ])
            ->addDirective(Directive::STYLE, [
                'christoph-rumpel.com',
                'christoph-rumpel.test',
                'data:',
            ])
            ->addDirective(Directive::FORM_ACTION, [
                'christoph-rumpel.com',
                'christoph-rumpel.test',
            ])
            ->addDirective(Directive::IMG, [
                '*',
                'unsafe-inline',
                'data:',
            ])
            ->addDirective(Directive::OBJECT, [
                'none',
            ]);
    }

    /**
     * @return \Spatie\Csp\Policies\Policy
     * @throws \Spatie\Csp\Exceptions\InvalidDirective
     */
    private function addDirectivesForGoogleFonts()
    {
        return $this->addDirective(Directive::FONT, [
            'fonts.gstatic.com',
            'data:',
        ])
            ->addDirective(Directive::SCRIPT, 'fonts.googleapis.com')
            ->addDirective(Directive::STYLE, 'fonts.googleapis.com');
    }

    /**
     * @return CustomPolicies
     * @throws \Spatie\Csp\Exceptions\InvalidDirective
     */
    protected function addDirectivesForGoogleAnalytics(): self
    {
        return $this->addDirective(Directive::SCRIPT, '*.google-analytics.com');
    }

    /**
     * @return CustomPolicies
     * @throws \Spatie\Csp\Exceptions\InvalidDirective
     */
    protected function addDirectivesForGoogleTagManager(): self
    {
        return $this->addDirective(Directive::SCRIPT, '*.googletagmanager.com');
    }

    /**
     * @return CustomPolicies
     * @throws \Spatie\Csp\Exceptions\InvalidDirective
     */
    protected function addDirectivesForFacebookChatPlugin(): self
    {
        return $this->addDirective(Directive::SCRIPT, [
            '*.facebook.com',
            '*.facebook.net',
        ])->addDirective(Directive::FRAME, [
            '*.facebook.com',
        ])->addDirective(Directive::STYLE, [
            '*.facebook.com',
            '*.facebook.net',
        ]);
    }

}