Gem::Specification.new do |spec|
  spec.name          = "VerbalSafe"
  spec.version       = "1.0.0"
  spec.authors       = ["Manzi Irakoze Kevin"]
  spec.summary       = "Multi-language profanity filter for Ruby and Rails."
  spec.license       = "MIT"

  spec.files         = Dir["lib/**/*.rb", "dictionaries/*.json", "README.md", "LICENSE"]
  spec.require_paths = ["lib"]

  spec.add_dependency "json"
end