import unittest
from src.verbalsafe.filter import Filter

class TestVerbalSafeFilter(unittest.TestCase):
    def setUp(self):
        # For testing, we can manually inject a small word list if needed
        # or rely on the local dictionaries folder
        self.filter = Filter(['en', 'rw'])

    def test_basic_masking(self):
        # Replace 'badword' with a word from your en.json
        text = "This is a badword"
        result = self.filter.clean(text)
        self.assertIn("*******", result)

    def test_case_insensitivity(self):
        text = "BADWORD"
        result = self.filter.clean(text)
        self.assertEqual(result, "*******")

if __name__ == '__main__':
    unittest.main()