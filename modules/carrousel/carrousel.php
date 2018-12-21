class ps_imagesliderTheme extends ps_imageslider {
    public function install() {
        if (!parent::install())
            return false;
        // on enregistre notre hook avec un nom unique
        if (!$this->registerHook('monHookCarrousel')	)
            return false;
        return true;
    }

    // notre fonction qui va afficher le contenu de notre hook
    public function hookmonHookCarrousel($params) {
        // mettez ici votre propre code ou appeler comme ici le hook de base du module
        
    }
}
