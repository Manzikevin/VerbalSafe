require 'json'

module VerbalSafe
  class Filter
    def initialize(selected_languages = ['en', 'rw', 'fr'])
      # Find dictionaries relative to this file
      @dict_path = File.expand_path('../../dictionaries/', __dir__)
      @languages = selected_languages
      @mask_char = '*'
      @word_list = []
      load_dictionaries
    end

    def load_dictionaries
      @languages.each do |lang|
        file_path = File.join(@dict_path, "#{lang}.json")
        if File.exist?(file_path)
          words = JSON.parse(File.read(file_path))
          @word_list.concat(words) if words.is_a?(Array)
        end
      end
    end

    def clean(text)
      return text if text.nil? || @word_list.empty?

      # Sort by length descending to prevent partial masking
      sorted_words = @word_list.sort_by(&:length).reverse
      
      result = text.dup
      sorted_words.each do |word|
        # \b ensures we match whole words; 'i' flag for case-insensitivity
        regex = Regexp.new(Regexp.escape(word), Regexp::IGNORECASE)
        result.gsub!(regex, @mask_char * word.length)
      end
      result
    end
  end
end