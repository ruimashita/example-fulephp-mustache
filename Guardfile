
SOURCE_DIR = 'fuel'

ignore %r{^#{SOURCE_DIR}/core/}, %r{^#{SOURCE_DIR}/vendor/}, %r{^#{SOURCE_DIR}/packages/},  %r{^#{SOURCE_DIR}/app/logs/}

guard 'livereload', :apply_js_live => false do
  watch(%r{^#{SOURCE_DIR}/(?!app/tests).+\.(css|js|php|mustache)$})
end


# guard 'shell' do
#   ## views以外の変更したファイルを php-cs-fixerでfixする
#   watch(%r{^#{SOURCE_DIR}/app/(?!views).+\.php$}) do |m| 
#     # command = "php php-cs-fixer.phar fix #{m[0]} --fixers=-psr0"
#     command = "php php-cs-fixer.phar fix #{m[0]} --fixers=-unused_use,-psr0"
#     puts command
#     `#{command}`
#   end
# end
